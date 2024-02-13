<?php
/*
Plugin Name: Affiliate Genie
Description: This plugin is to fetch affiliate products from Amazon, Ebay, Aliexpress and other E-commerce platforms which provides affiliates
Version: 1.0
Author: Abhishek Chatterjee
*/
require 'vendor/autoload.php';

require_once plugin_dir_path(__FILE__) . 'apihandler.php';
add_action('admin_menu', 'affiliategenie_plugin_menu');
//activation and deactivation hooks for Plugin
register_activation_hook(__FILE__, 'affiliategenie_plugin_activate');
register_deactivation_hook(__FILE__, 'affiliategenie_plugin_deactivate');
function affiliate_genie_enqueue_styles() {
    wp_enqueue_style('affiliate-genie-styles', plugins_url('affiliategenie.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'affiliate_genie_enqueue_styles');
function affiliategenie_plugin_menu() {
    add_menu_page(
        'Affiliate Genie Settings',
        'Affiliate Genie',
        'manage_options',
        'affiliategenie-plugin-settings',
        'affiliategenie_plugin_settings_page'
    );
}
function affiliategenie_plugin_settings_page() {
    // You can include HTML or form elements for your settings page here
    if (isset($_POST['aws_paapi_submit'])) {
        // Process and save the form data
        aws_paapi_handle_form_submission();
    }

    // Display the form
    echo '<div class="wrap">';
    echo '<h1>AFFILIATE GENIE Plugin Settings</h1>';
		aws_paapi_display_settings_form();
    echo '</div>';
}
function affiliategenie_plugin_activate() {
    // Set up the database table on plugin activation
    global $wpdb;
    $table_name = $wpdb->prefix . 'affiliate_genie_settings';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        api_data text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function affiliategenie_plugin_deactivate() {
    // Delete the database table on plugin deactivation
    global $wpdb;
    $table_name = $wpdb->prefix . 'affiliate_genie_settings';
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}
function aws_paapi_display_settings_form(){
	echo '
		<div class="row">
		<form method="post" action="">
			<div class="form_wrapper">
				
				  <div class="form-group">
						<label>Choose Amazon Locale</label>
						<select name="locale" class="form-input">
							<option value=".com">USA</option>
							<option value=".sa">Saudi Arabia</option>
							<option value=".in">India</option>
							<option value=".fr">France</option>
							<option value=".ca">Canada</option>
							<option value=".co.uk">United Kingdom</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="affiliate_id">Amazon Affiliate ID:</label>
						<input type="text" id="affiliate_id" class="form-input" name="affiliate_id" value="" required>
					</div>
					
					<div class="form-group">
						<label for="search_index">SearchIndex:</label>
						<select name="search_index" class="form-input" id="search_index" name="search_index" required>
							<option value="All">All</option>
							<option value="ArtsAndCrafts">ArtsAndCrafts</option>
							<option value="Automotive">Automotive</option>
							<option value="Baby">Baby</option>
							<option value="Beauty">Beauty</option>
							<option value="Books">Books</option>
							<option value="Computers">Computers</option>
							<option value="Electronics">Electronics</option>
							<option value="Fashion">Fashion</option>
							<option value="GardenAndOutdoor">GardenAndOutdoor</option>
							<option value="GiftCards">GiftCards</option>
							<option value="GroceryAndGourmetFood">GroceryAndGourmetFood</option>
							<option value="HealthPersonalCare">HealthPersonalCare</option>
							<option value="HomeAndKitchen">HomeAndKitchen</option>
							<option value="HomeAndKitchen">HomeAndKitchen</option>
							<option value="KindleStore">KindleStore</option>
							<option value="Miscellaneous">Miscellaneous</option>
							<option value="MoviesAndTV">MoviesAndTV</option>
							<option value="Music">Music</option>
							<option value="MusicalInstruments">MusicalInstruments</option>
							<option value="OfficeProducts">OfficeProducts</option>
							<option value="PetSupplies">PetSupplies</option>
							<option value="Software">Software</option>
							<option value="SportsAndOutdoors">SportsAndOutdoors</option>
							<option value="ToolsAndHomeImprovement">ToolsAndHomeImprovement</option>
							<option value="ToysAndGames">ToysAndGames</option>
							<option value="VideoGames">VideoGames</option>
						</select>
											
					</div>
					<div class="form-group">
						<label for="keyword">Keyword:</label>
						<input type="text" id="keyword" class="form-input" name="keyword" value="" required>
					</div>
					<br>'.wp_nonce_field('aws_paapi_nonce', 'aws_paapi_nonce').' <input type="submit" name="aws_paapi_submit" value="Save/Update">
				
			</div>
			</form>
		</div>
		';
}
function aws_paapi_handle_form_submission(){
	if (!isset($_POST['aws_paapi_nonce']) || !wp_verify_nonce($_POST['aws_paapi_nonce'], 'aws_paapi_nonce')) {
        wp_die('Security check failed.');
    }
	$locale = sanitize_text_field($_POST['locale']);
	$endpoint = '';
	$marketplace= '';
	switch($locale){
		case '.com':
			$endpoint='webservices.amazon.com';
			$marketplace='www.amazon.com';
			$region='us-east-1';
		break;
		case '.sa':
			$endpoint='webservices.amazon.sa';
			$marketplace='www.amazon.sa';
			$region='eu-west-1';
		break;
		case '.in':
			$endpoint='webservices.amazon.in';
			$marketplace='www.amazon.in';
			$region='us-east-1';
		break;
		case '.co.uk':
			$endpoint='webservices.amazon.co.uk';
			$marketplace='www.amazon.co.uk';
			$region='eu-west-2';
		break;
		default:
			
		break;
			
	}
	$affiliate_id = sanitize_text_field($_POST['affiliate_id']);
    $search_index = sanitize_text_field($_POST['search_index']);
    $keyword = sanitize_text_field($_POST['keyword']);
	$respone = call_amazon_paapi5_api($region,$marketplace,$endpoint,$affiliate_id,$search_index,$keyword);
	return $respone; 
}