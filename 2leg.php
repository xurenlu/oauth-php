<?php
include "./config.php";
include "./oauth_config.php";
include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";


$options = array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret );
OAuthStore::instance("2Leg", $options );
$url = $hostOptions["prefix"]."api.php"; // this is the URL of the request
$method = "POST"; // you can also use POST instead
$params = null;

try
{
        // Obtain a request object for the request we want to make
        $request = new OAuthRequester($url, $method, $params);

        // Sign the request, perform a curl request and return the results, 
        // throws OAuthException2 exception on an error
        // $result is an array of the form: array ('code'=>int, 'headers'=>array(), 'body'=>string)
        $result = $request->doRequest();
        
        $response = $result['body'];
        echo "服务器端返回:".$response."\n";
}
catch(OAuthException2 $e)
{
	echo "出错了:";
	var_dump($e);
}