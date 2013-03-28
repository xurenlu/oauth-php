<?php
include_once 'config.php';
include "../oauth_config.php";
include_once '../oauth-php/library/OAuthStore.php';
include_once '../oauth-php/library/OAuthRequester.php';
 $store = OAuthStore::instance('MySQL', $dbOptions);

$oauthToken = $_GET["token"];
OAuthRequestLogger::enableLogging();
$user_id = $_user_id;
var_dump(OAuthRequester::requestAccessToken($consumer_key, $oauthToken, $user_id));
