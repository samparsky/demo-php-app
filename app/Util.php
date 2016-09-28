<?php

require('common/common.php');
require('curl.php');

class Util {
	
	private function __construct(){

	}

	/**
	 *	@param null
	 *  @return Returns array list of states
	 *
	 **/

	public static function getStates(){
		$url      = 'https://nigeriaelections.org/admin/api/v1/state';
		$response = MyCurl::get($url);
		$states   = json_decode($response, true);
		return $states;
	}

	/**
	 *	@param null
	 *  @return Returns array list of states
	 *
	 **/

	public static function getLGA($state_id){
		$url      = 'https://nigeriaelections.org/admin/api/v1/state/'.$state_id;
		$response = MyCurl::get($url);
		$lga      = json_decode($response, true);
		return $lga;
	}

	/**
	 *	@param null
	 *  @return Returns array list of states
	 *
	 **/

	public static function getWards($lga_id){
		$url      = 'https://nigeriaelections.org/admin/api/v1/ward/index/'.$lga_id;
		$response = MyCurl::get($url);
		$wards    = json_decode($response, true);
		return $wards;
	}

}