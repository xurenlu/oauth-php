<?php /* Smarty version Smarty-3.1.13, created on 2013-03-27 18:29:44
         compiled from "/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17231273075152ca18f22d55-25020409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36a356c640e8fd66507a87bb54e7168956ea484' => 
    array (
      0 => '/home/x/htdocs/localhost/open/oauth-php/example/server/core/templates/register.tpl',
      1 => 1263321363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17231273075152ca18f22d55-25020409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'consumer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5152ca1924d715_63936894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152ca1924d715_63936894')) {function content_5152ca1924d715_63936894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1>Register server</h1>

<p>Register a server which is gonna act as an identity client.</p>

<form method="post">

    <fieldset>
	<legend>About You</legend>
	
	<p>
	    <label for="requester_name">Your name</label><br/>
	    <input class="text" id="requester_name"  name="requester_name" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consumer']->value['requester_name'])===null||$tmp==='' ? $_REQUEST['requester_name'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
	</p>
	
	<p>
	    <label for="requester_email">Your email address</label><br/>
	    <input class="text" id="requester_email"  name="requester_email" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consumer']->value['requester_email'])===null||$tmp==='' ? $_REQUEST['requester_email'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
	</p>
    </fieldset>
    
    <fieldset>
	<legend>Location Of Your Application Or Site</legend>
	
	<p>
	    <label for="application_uri">URL of your application or site</label><br/>
	    <input id="application_uri" class="text" name="application_uri" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consumer']->value['application_uri'])===null||$tmp==='' ? $_REQUEST['application_uri'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
	</p>
	
	<p>
	    <label for="callback_uri">Callback URL</label><br/>
	    <input id="callback_uri" class="text" name="callback_uri" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consumer']->value['callback_uri'])===null||$tmp==='' ? $_REQUEST['callback_uri'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
	</p>
    </fieldset>

    <br />
    <input type="submit" value="Register server" />
</form>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>