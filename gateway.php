<?php
	/*
		PHP Gateway for frontend CORS - Ping, 2018
	*/
	
	$ch = curl_init(); 

	//print_r($_GET);

	if(isset($_GET['request_url']) && $_GET['request_url'] != '') {
	    curl_setopt($ch, CURLOPT_URL, $_GET['request_url'].'&'); 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		
		$output = curl_exec($ch); 
		print_r($output);
		curl_close($ch);    
	}

?>