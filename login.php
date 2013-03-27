<?php
session_start();
include "./config.php";
if(!$_GET["post"]){?>
<form method="GET">
   返回地址: <input name="goto" value="<?php echo $_GET["goto"];?>">
    <input name="post" value="1" type="hidden"><br>
    用户名<input name="username" ><br>
    密码:<input name="password" ><br>
<button type="submit">提交</button>
    仅仅是做演示流程用,填啥都可以,直接提交吧...
</form>
<?php } else{
    $_SESSION["authorized"]="YES";
    header("Location:".$_GET["goto"]);
 } ?>
