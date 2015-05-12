<?php /* Smarty version 2.6.22, created on 2012-06-25 21:22:09
         compiled from user/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'user/login.tpl', 12, false),)), $this); ?>
<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post" >
<input type="hidden" name="req" value="<?php echo $this->_tpl_vars['req']; ?>
" />
<!-- Start: login-holder -->
<div id="login-holder">

	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
            <div style="height: 25px; font-weight: bold;<?php if ($_GET['type'] == 'error'): ?>color: red;<?php else: ?>color: blue;<?php endif; ?>">
                <center><?php echo ((is_array($_tmp=@$_GET['msg'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</center>
            </div>
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input id="login" name="login" type="text" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input id="paswd" name="paswd" type="password" value=""  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
				<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	 </div>
 <!--  end loginbox -->
 </div>
<!-- End: login-holder -->
</form>