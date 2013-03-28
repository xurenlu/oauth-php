<?php
?>
<Pre>
复习一下oauth的流程与概念:
request_token:未授权的token。由应用端向oauth服务器端请求得到;
oauth_token:用户在oauth服务器端确认给应用授权后,oauth服务器端又将用户引导回应用端回调地址时在通过url参数附加的一个token;
access_token:用以请求受保护资源token;用户被从oauth服务器引导回应用端时,oauth同时传回来了一个oauth_token.应用拿这个值去oauth服务器端得到的一个token,这个token就是access_token;应用记录此token,后续请求资源时即用这个token;
</pre>
<li>
	预备工作:
	创建客户端/服务器端两个空数据库;
	请事先修改好server/config.php,client/config.php的内容;<br>
	请保证oauth_config.php 可写;<br>
<a href="oauth-php/library/store/mysql/install.php" target="_blank"> .安装数据库[数据器端]: </a> <br>
<a href="oauth-php/library/store/mysql/install_client.php" target="_blank"> .安装数据库[客户端]: </a> <br>
</li>
<ol>

<li>
<a href="server/register.php" target="_blank">.注册应用[服务器端]</a><br><br>
注册应用其实就是其他开放平台做的申请应用这一步;<br><br>
</li>
<li>
<a href="client/save_server.php" target="_blank">.保存应用信息和服务器信息[应用端]</a><br><br>
好了，在开放平台申请到了应用,现在把key和回调地址这些信息都保存起来;<br>
<br>
</li>
<li>
<a href="server/logout.php" target="_blank">.为了调试方便,服务端先把用户出[服务端]</a>
注意用户ID是写死的
<br><br>
<br>
</li>
<li>
<a href="client/client_index.php" target="_blank">.应用端引导用户前往授权[应用端]</a><br><br>
模拟了大家用新浪微博,腾讯微博,淘宝开放平台常见的给应用授权这一步;<br>
授权完成之后，服务器端又引导用户浏览器回到了cb.php，同时传了一个token过去;在cb.php里就用这个token取到了access token;<br><br>
</li>
<li>
<a href="client/call.php" target="_blank">执行调用[应用端]</a><br><br>
access_token已经存在数据库里了,直接调用吧;
<br>
</li>
</ol>
