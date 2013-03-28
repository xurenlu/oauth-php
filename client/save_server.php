<?php
include "../oauth_config.php";
include_once './config.php';
include_once '../oauth-php/library/OAuthStore.php';

$store = OAuthStore::instance('MySQL', $dbOptions);

// 当前用户的ID, 必须为整数
$user_id = $_user_id;

// 服务器描述信息
$server = array(
    'consumer_key'      => $consumer_key,
    'consumer_secret'   => $consumer_secret,
    'server_uri'        => $hostOptions["prefix"],
    'signature_methods' => array('HMAC-SHA1','MD5'),
    'request_token_uri' => $hostOptions["prefix"].'server/request_token.php',
    'authorize_uri'     => $hostOptions["prefix"].'server/auth.php',
    'access_token_uri'  => $hostOptions["prefix"].'server/access_token.php'
);
// 将服务器信息保存在 OAuthStore 中
$consumer_key = $store->updateServer($server, $user_id);
echo "保存完毕";
?>
