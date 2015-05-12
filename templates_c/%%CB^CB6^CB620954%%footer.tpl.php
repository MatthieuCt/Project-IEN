<?php /* Smarty version 2.6.22, created on 2012-07-10 13:31:19
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'common/footer.tpl', 5, false),array('modifier', 'default', 'common/footer.tpl', 5, false),)), $this); ?>
<!-- END FOOTER --> 
	<div class=" span-24 last main-footer bottom-box noprint" style="color:#888888; font-size:90%; height:20px; margin:0 auto; padding:1px 0 5px; text-align:center;"
    >
    <span style="margin: 5px 0px 0px 10px; float: left;"> 
      © 2006 - <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 IEN PW <?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_FOOTER'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_FOOTER') : smarty_modifier_default($_tmp, 'TXT_FOOTER')); ?>

    </span>
    
    <!-- :::::::::::::::::::: VALIDATION :::::::::::::::::::: -->
    <ul class="top-menu-ul" style="margin: 5px 10px 0px 0px; float: right;">
      <li>
        <a id="xhtml" href="http://validator.w3.org/check?uri=referer"></a>
      </li>
      <li>
        <a id="css" href="http://jigsaw.w3.org/css-validator/check/referer/"></a>
      </li>
    </ul>
   
    
    
  </div>	<br class="clear" />  
  <input type="hidden" id="HTTP_ADDRESS" value="<?php echo $_SESSION['HTTP_ADDRESS']; ?>
" />  
<!-- END FOOTER --> 