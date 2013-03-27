<?php /* Smarty version Smarty-3.1.13, created on 2013-03-27 18:26:54
         compiled from "/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10342415155152c96eea4162-06341102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbd2647b258ecfc0bd6bc3cf1acf01a7f396e053' => 
    array (
      0 => '/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/index.tpl',
      1 => 1263321363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10342415155152c96eea4162-06341102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5152c96f012c21_37933728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152c96f012c21_37933728')) {function content_5152c96f012c21_37933728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1>OAuth server</h1>
Go to:

<ul>
  <li><a href="/logon">Logon</a></li>
  <li><a href="/register">Register your consumer</a></li>
</ul>

Afterwards, make an OAuth test request to <strong>http://<?php echo $_SERVER['name'];?>
/hello</strong> to test your connection.</p>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>