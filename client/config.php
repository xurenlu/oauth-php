<?php
// 数据库连接信息
$dbOptions = array(
	'server'   => 'localhost',
	'username' => 'renlu',
	'password' => '',
	'database' => 'oauth_client'
);
$hostOptions = array(
    "prefix"=>"http://localhost/open/"
);
error_reporting(E_ALL&~E_NOTICE);
//用户ID要和../server/config.php里的一样;
$_user_id = 9927;
