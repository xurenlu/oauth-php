<?php
ob_start();
session_start();

if (empty($_SESSION['authorized']))
{
	$uri = $_SERVER['REQUEST_URI'];
	header('Location: login.php?goto=' . urlencode($uri));
	exit();
}

include_once 'config.php';
include_once '../oauth-php/library/OAuthStore.php';
include_once '../oauth-php/library/OAuthServer.php';

//登陆用户
$user_id = $_user_id;

// 取得 oauth store 和 oauth server 对象
$store = OAuthStore::instance('MySQL', $dbOptions); 
$server = new OAuthServer();

try
{
    // 检查当前请求中是否包含一个合法的请求token
    // 返回一个数组, 包含consumer key, consumer secret, token, token secret 和 token type.
    $rs = $server->authorizeVerify();
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // 判断用户是否点击了 "allow" 按钮(或者你可以自定义为其他标识)
        $authorized = array_key_exists('allow', $_POST);

        // 设置token的认证状态(已经被认证或者尚未认证)
        // 如果存在 oauth_callback 参数, 重定向到客户(消费方)地址
        $server->authorizeFinish($authorized, $user_id);

        // 如果没有 oauth_callback 参数, 显示认证结果
        // ** 你的代码 **
        foreach($rs as $k=>$v){
            $tmp[]=urlencode($k)."=".urlencode($v);
        }
        //header("Location:cb.php?".join("&",$tmp));
        header("Location:../client/cb.php?token=".$rs["token"]);
    }
	else
	{
		echo 'Error';
	}
}
catch (OAuthException2 $e)
{
    echo "<pre>";
    //print_r($e);
    echo "</pre>";
    // 请求中没有包含token, 显示一个使用户可以输入token以进行验证的页面
    // ** 你的代码 **
    echo '
    <form method="POST">
    oauth_token:
    <input name="oauth_token" value="'.$_GET["code"]  .'"><br>
    您确定要授权该应用该问您的数据吗?
    <input type="submit" name="allow" value="允许">
    <input type="submit" name="notallow" value="不允许">

    </form>
    ';
}
?>
