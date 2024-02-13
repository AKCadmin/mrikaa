<?php
require_once plugin_dir_path(__FILE__) . 'awssdk.php';

function affiliategenie_settings(){
	
}
function amazon_paapi5_api_handle($region,$marketplace,$endpoint,$affiliate_id,$search_index,$keyword) {
    // Your Amazon Product API code goes here
    // Use the AWS SDK as needed
    // For example, interact with the Product API
	
    $api_result = call_amazon_paapi5_api($marketplace,$endpoint,$affiliate_id,$search_index,$keyword);

    // Display or process the API result as needed
    echo '<div class="loader">Please Wait While we are syncing the products</div>';
}

function call_amazon_paapi5_api($region,$marketplace,$endpoint,$affiliate_id,$search_index,$keyword) {
	
   $serviceName="ProductAdvertisingAPI";
		$region=$region;
		$accessKey="AKIAI4LTDXVC67KT35QA";
		$secretKey="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";
		$payload="{"
				." \"Keywords\": \"$keyword\","
				." \"Resources\": ["
				."  \"CustomerReviews.Count\","
				."  \"CustomerReviews.StarRating\","
				."  \"Images.Primary.Large\","
				."  \"ItemInfo.ByLineInfo\","
				."  \"ItemInfo.ContentInfo\","
				."  \"ItemInfo.ManufactureInfo\","
				."  \"ItemInfo.ProductInfo\","
				."  \"ItemInfo.Title\","
				."  \"ItemInfo.Features\","
				."  \"Offers.Listings.Price\","
				."  \"RentalOffers.Listings.BasePrice\""
				." ],"
				." \"SearchIndex\": \"$search_index\","
				." \"PartnerTag\": \"$affiliate_id\","
				." \"PartnerType\": \"Associates\","
				." \"Marketplace\": \"$marketplace\""
				."}";
		
		$host=$endpoint;
		$uriPath="/paapi5/searchitems";
		$awsv4 = new AwsV4 ($accessKey, $secretKey);
		$awsv4->setRegionName($region);
		$awsv4->setServiceName($serviceName);
		$awsv4->setPath ($uriPath);
		$awsv4->setPayload ($payload);
		$awsv4->setRequestMethod ("POST");
		$awsv4->addHeader ('content-encoding', 'amz-1.0');
		$awsv4->addHeader ('content-type', 'application/json; charset=utf-8');
		$awsv4->addHeader ('host', $host);
		$awsv4->addHeader ('x-amz-target', 'com.amazon.paapi5.v1.ProductAdvertisingAPIv1.SearchItems');
		$headers = $awsv4->getHeaders ();
		$headerString = "";
		foreach ( $headers as $key => $value ) {
			$headerString .= $key . ': ' . $value . "\r\n";
		}
		$params = array (
				'http' => array (
					'header' => $headerString,
					'method' => 'POST',
					'content' => $payload
				)
			);
		$stream = stream_context_create ( $params );

		$fp = @fopen ( 'https://'.$host.$uriPath, 'rb', false, $stream );

		if (! $fp) {
			throw new Exception ( "Exception Occured" );
		}
		$response = @stream_get_contents ( $fp );
		if ($response === false) {
			throw new Exception ( "Exception Occured" );
		}
		$json_response= json_decode($response,true);
		
		process_products($json_response,$marketplace);
			//return $json_response;
}
function process_products($json_response,$marketplace) {
	
    foreach ($json_response['SearchResult']['Items'] as $product_data) {
        create_or_update_woocommerce_product($product_data,$marketplace); 
    }
}
function create_or_update_woocommerce_product($product_data,$marketplace){
	if (!function_exists('wc_create_product')) {
		include_once WC_ABSPATH . 'includes/wc-product-functions.php';
	}
	$sku = $product_data['ASIN'];
	$title = $product_data['ItemInfo']['Title']['DisplayValue'];
	$external_permalink_url = $product_data['DetailPageURL'];
	$featured_image = $product_data['Images']['Primary']['Large']['URL'];
	$brand = $product_data['ItemInfo']['ByLineInfo']['Brand']['DisplayValue'];
	$display_amount = $product_data['Offers']['Listings'][0]['Price']['DisplayAmount'];
	
	//$short_description = $product_data['ItemInfo']['features']['DisplayValues'][0];
	$type='simple';
	$price = $product_data['Offers']['Listings'][0]['Price']['Amount'];
	$features = isset($product_data['ItemInfo']['Features']['DisplayValues']) ? $product_data['ItemInfo']['Features']['DisplayValues'] : array();
	
    // Convert the features array to a string for the product description
    $description = implode("\n", $features);
	$existing_product_id = wc_get_product_id_by_sku($sku);
	$category_id = 116;
	//check if the marketplace url exists in the DetailPageURL of Amazon
	$marketplace_url_exists = strpos($external_permalink_url, $marketplace) !== false;
	if ($existing_product_id && $marketplace_url_exists) {
		 $product = wc_get_product($existing_product_id);
		 $product->set_name($title);
         $product->set_short_description($description); 
         $product->set_regular_price($price);	 
		 $attachment_id = affiliate_save_image($featured_image, $title);
		 $product->set_image_id($attachment_id);
		 //$product->set_button_text('Buy Now at Amazon @ '.$display_amount);
		 
		 wp_set_object_terms($existing_product_id, $category_id, 'product_cat');
         $product->save();
	} else{
		
		$product = new WC_Product_External();

        // Set product data
        $product->set_name($title);
        $product->set_sku($sku);
        $product->set_regular_price($price);
        $product->set_short_description($description); 
        $product->set_product_url($external_permalink_url);
        //$product->set_button_text('Buy Now at Amazon @ '.$display_amount);

        // Save the product
        $product_id = $product->save();
		wp_set_object_terms($product_id, $category_id, 'product_cat');

        // Set the image as the product featured image
        $attachment_id = affiliate_save_image($featured_image, $title);
        $product->set_image_id($attachment_id);
        $product->save();
	}
	
	
	
	
	
	
}
function affiliate_save_image($img_url, $title){
	$image_name = sanitize_title($title) . '-' . time() . '.jpg';
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($img_url);
    $unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
    $filename = basename($unique_file_name);

    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }

    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null);

    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_content'   => 'Featured Image',
        'post_status'    => 'inherit', 
    );

    $attach_id = wp_insert_attachment($attachment, $file);
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);

    return $attach_id;
}