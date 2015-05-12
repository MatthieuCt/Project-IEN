<?php /* Smarty version 2.6.22, created on 2012-06-09 20:15:27
         compiled from common/page_frontpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'common/page_frontpage.tpl', 2, false),array('function', 'label', 'common/page_frontpage.tpl', 9, false),)), $this); ?>
<form id="fsearch" action="index.php" method="get" >
<input type="hidden" id="lang" name="lang" value="<?php echo ((is_array($_tmp=@$_SESSION['S_LangId'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
" />
<input type="hidden" id="c" name="c" value="search" />
<div class="span-6 left-column first">

    <!-- :::::::::::: Organizacja Instytutu ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="news-wrapper">
        <div>
            <h3><img src="images/icons/ien.png" alt="<?php echo smarty_function_label(array('get' => 'TXT_INSTITUTE'), $this);?>
" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_INSTITUTE'), $this);?>
</h3>
            <?php echo smarty_function_label(array('get' => 'BOX_INSTITUTE'), $this);?>

        </div>		
    <div>	
			 
    <h3><img src="images/icons/organ.gif" alt="<?php echo smarty_function_label(array('get' => 'TXT_ORGANIZATION'), $this);?>
" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_ORGANIZATION'), $this);?>
</h3>
    <?php echo $this->_tpl_vars['page_institut']; ?>

    
    <?php $_from = $this->_tpl_vars['page_institut']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <?php echo $this->_tpl_vars['item']['institute_name']; ?>
 
    <?php endforeach; endif; unset($_from); ?>
    
</div>
</div>
<div class="news-wrapper">
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <h3><img src="images/icons/search.gif" alt="Wyszukiwarka" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_SEARCH'), $this);?>
</h3>

    <input 	type="text" name="query" 
                    onfocus="this.style.color='black'; if(this.value=='<?php echo smarty_function_label(array('get' => 'TXT_SEARCH_INPUT'), $this);?>
')this.value='';" 
                    onblur="<?php echo 'if( this.value==\'\' ){ this.value=\''; ?>
<?php echo smarty_function_label(array('get' => 'TXT_SEARCH_INPUT'), $this);?>
<?php echo '\';this.style.color=\'grey\';}'; ?>
" 
                    value="<?php echo smarty_function_label(array('get' => 'TXT_SEARCH_INPUT'), $this);?>
" style="color: grey;" />
    <input type="submit" value="<?php echo smarty_function_label(array('get' => 'TXT_SEARCH_BUTTON'), $this);?>
" />

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>

					
			
		</div>
</form>		
		<div class="span-11 center-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div id="content">
			 <?php echo $this->_tpl_vars['pageContent']; ?>
			
                        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div class="news-wrapper">
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<h3><img src="images/icons/script.png" alt="aktualnosci" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_MOSTVIEWS'), $this);?>
</h3>
				  <?php echo ((is_array($_tmp=@$this->_tpl_vars['box_article_new'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['TXT_NOARTICLES']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['TXT_NOARTICLES'])); ?>

                                  
                    				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			</div>
                              
		</div>
		<div class="span-6 last right-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div>
        <h3><img src="images/icons/map.png" alt="plan pw" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_PWMAPLABEL'), $this);?>
</h3>
  			
        <?php echo smarty_function_label(array('get' => 'BOX_PWMAP'), $this);?>

			</div>
      
      
      <div class="files-wrapper">
        <h3><img id="files" alt="Pliki" src="images/icons/attachment_icon.png" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_FILESMOSTDOWNLOAD'), $this);?>
</h3>
        <?php echo ((is_array($_tmp=@$this->_tpl_vars['box_file_most_downloaded'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['TXT_NOFILES']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['TXT_NOFILES'])); ?>

      </div>

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>