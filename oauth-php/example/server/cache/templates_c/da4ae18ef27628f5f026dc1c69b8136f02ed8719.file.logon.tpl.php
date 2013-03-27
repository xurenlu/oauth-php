<?php /* Smarty version Smarty-3.1.13, created on 2013-03-27 18:27:28
         compiled from "/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/logon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7714024125152c990b84de0-25846880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4ae18ef27628f5f026dc1c69b8136f02ed8719' => 
    array (
      0 => '/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/logon.tpl',
      1 => 1263321363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7714024125152c990b84de0-25846880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5152c990c2d9b1_46562251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152c990c2d9b1_46562251')) {function content_5152c990c2d9b1_46562251($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1>Login</h1>

<form method="post">
    <input type="hidden" name="goto" value="<?php echo $_REQUEST['goto'];?>
" />

    <label for="username">User name</label><br />
    <input type="text" name="username" id="username" />
    
    <br /><br />

    <label for="password">Password</label><br />
    <input type="text" name="password" id="password" />

    <br /><br />
    
    <input type="submit" value="Login" />
</form>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>