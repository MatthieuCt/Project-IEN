<form name="login" action="{$smarty.server.PHP_SELF}" method="post" >
<input type="hidden" name="req" value="{$req}" />
<!-- Start: login-holder -->
<div id="login-holder">

	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
            <div style="height: 25px; font-weight: bold;{if $smarty.get.type == 'error'}color: red;{else}color: blue;{/if}">
                <center>{$smarty.get.msg|default:"&nbsp;"}</center>
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
		{*<tr>
			<th></th>
			<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
		</tr>*}
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	{* <a href="" class="forgot-pwd">Forgot Password?</a> *}
 </div>
 <!--  end loginbox -->
 {*
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->
*}
</div>
<!-- End: login-holder -->
</form>