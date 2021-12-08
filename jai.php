<?php

	$url = 'http://api2.directscale.com/api/Repsite/GetCustomerSite?Webalias=samspace';
	
		$curl = curl_init();
		$result = '';
		curl_setopt_array($curl, array(
			CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url,
			CURLOPT_REFERER => 'https://www.nevetica.directscalestage.com/', 
			CURLOPT_ENCODING => '',
		));
		
			try {
				$result = curl_exec($curl);
			} catch(Exception $e){
				print_r($e);
			}
		$info = curl_getinfo($curl);
		
		print_r($info);
		curl_close($curl);
		$result = json_decode($result,true);
		echo '<pre>'; print_r($result); echo '</pre>';
		
		/*$url = 'http://api2.directscale.com/api/Repsite/GetCountries';
      
		$curl = curl_init();
		curl_setopt_array($curl, array(
      		CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url,
			CURLOPT_REFERER => 'www.mywakaya.com',
		));
 
  		try {
			$result = curl_exec($curl);
    	} catch(Exception $e){
			print_r($e);
		}
	
		curl_close($curl);
		$country_list = json_decode($result, false);
  		//$country_list = $country_list->Data;
		print_r($result); */
  		
		/*$url = 'http://api2.directscale.com/api/Repsite/GetCompanyLanguages';
  
		$curl = curl_init();
		curl_setopt_array($curl, array(
      		CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url,
			CURLOPT_REFERER => 'www.mywakaya.com',
		));
 
  		try {
			$result = curl_exec($curl);
    	} catch(Exception $e){
			print_r($e);
		}
		curl_close($curl);
		print_r($result);*/