<?php
ob_start();
if(isset($_GET['req']) && ($_GET['req'] == 1)){
    include_once 'config.php';
    include_once "oauth_config.php";
	include_once 'oauth-php/library/OAuthStore.php';
	include_once 'oauth-php/library/OAuthRequester.php';

	$store = OAuthStore::instance('MySQL', $dbOptions);

	// 用户Id, 必须为整型
	$user_id = $_user_id;

	// 消费者key

	// 从服务器获取未授权的token
    $token = OAuthRequester::requestRequestToken($consumer_key, $user_id);
    header("Location:".$token["authorize_uri"]."?code=".$token["token"]);
}
else{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>测试页面</title>
	</head>

	<body>
    <p>消费者测试页面，点击下面的按钮开始测试<br>
点击后即前往服务端进行用户验证和授权</p>

	<input type="button" name="button" value="Click Me" id="RequestBtn"/>
	<script type="text/javascript">
	document.getElementById('RequestBtn').onclick = function(){
		window.location = 'client_index.php?req=1';
	}
	</script>
	</body>
	</html>
<?php
}
?>
