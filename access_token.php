<?php
include_once 'config.php';
include_once 'oauth-php/library/OAuthStore.php';
include_once 'oauth-php/library/OAuthServer.php';
 
$store = OAuthStore::instance('MySQL', $dbOptions); 
 
$server = new OAuthServer();
$server->AccessToken();
