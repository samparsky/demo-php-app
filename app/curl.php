<?php

class MyCurl {

	private $curl;
	
	private function __construct(){
	}


	/**
	 *	@param url Accepts url param returns response
	 *  @return data response from the url
	 *
	 **/

	public static function get($url){
		$handle = curl_init($url);

		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);

		$value = curl_exec($handle);
		curl_close($handle);
		return $value;
	}


	/**
	 *	@param url Accepts url param returns response
	 *  @param data Associative array of data to be sent
	 *  @return data response from the url
	 *
	 **/

	public static function post($url ,$data ){
		$handle = curl_init($url);
		
		curl_setopt($handle, CURLOPT_POST, $data);
		curl_setopt($handle,CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);

		$value = curl_exec($handle);
		curl_close($handle);
		return $value;
	}
}