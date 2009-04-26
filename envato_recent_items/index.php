<?php
/*
Plugin Name: Envato Recent Items
Plugin URI: http://wordpress.org
Description: Displays a custom number of your recent Envato items and thumbnails. Options such as price and item count can be customized.
Author: Drew Douglass
Version: 1.0
Author URI: http://dev-tips.com
*/

if(!function_exists('envato_recent_items')){
	
	function envato_recent_items($username, $market = 'themeforest', $count = 3, $price = false, $ref = ''){
		
		//Set the api url that we need according to username and market 
		$json_url = 'http://marketplace.envato.com/api/edge/new-files-from-user:'. $username . ','. $market . '.json';
		
		//Get the content of the url above 
		$json_info = file_get_contents($json_url);
		
		//Decode the contents of $json_info so we can use it to display our information 
		$json_data = json_decode($json_info, true);
		
		for($i=0; $i<$count; $i++){
			$data .= '<div class="envato_item">' . $json_data['new-files-from-user'][$i]['item'] . '</div>';
			
			$data .= '<div class="envato_thumb"><a href="' . $json_data['new-files-from-user'][$i]['url'] . '?ref='.$ref.'" title="'. $json_data['new-files-from-user'][$i]['url'] .'"><img src="'.$json_data['new-files-from-user'][$i]['thumbnail'].'" alt="'. $json_data['new-files-from-user'][$i]['item'] .'" /></a></div>';
			
			$data .= '<div class="envato_link"><a href="' . $json_data['new-files-from-user'][$i]['url'] . '?ref='.$ref.'" title="'. $json_data['new-files-from-user'][$i]['url'] .'">Visit ' . $json_data['new-files-from-user'][$i]['item'] . '</a>.</div>';
			
			if($price === true){
				$data .= '<div class="envato_price">' . $json_data['new-files-from-user'][$i]['cost'] . '</div>';
			}
			
		}
		
		return $data;	
	}
}
?>