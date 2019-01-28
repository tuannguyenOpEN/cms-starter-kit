<?php

namespace Gigya\CmsStarterKit\sdk;

/**
 * Created by PhpStorm.
 * User: Yaniv Aran-Shamir
 * Date: 2/17/16
 * Time: 2:15 PM
 */
class GSFactory {

	public static function createGsRequest($apiKey, $secret, $apiMethod, $params, $dataCenter = "us1.gigya.com", $useHTTPS = true) {
		return new GigyaApiRequest($apiKey, $secret, $apiMethod, $params, $dataCenter, $useHTTPS);
	}

	public static function createGSRequestAppKey($apiKey, $key, $secret, $apiMethod, $params, $dataCenter = "us1.gigya.com", $useHTTPS = true) {
		return new GigyaApiRequest($apiKey, $secret, $apiMethod, $params, $dataCenter, $useHTTPS, $key);
	}

	public static function createGSRequestAccessToken($token, $apiMethod, $params, $dataCenter = "us1.gigya.com", $useHTTPS = true) {
		return new GigyaApiRequest($token, null, $apiMethod, $params, $dataCenter, $useHTTPS);
	}

	public static function createGSObjectFromArray($array) {
		if (!is_array($array)) {
			throw new GSException("Array is expected got " . gettype($array) );
		}
		$json = json_encode($array, JSON_UNESCAPED_SLASHES);
		if ($json === false) {
			throw new GSException("Error converting array to json see json errno in error code", json_last_error());
		}
		return new GSObject($json);
	}

}