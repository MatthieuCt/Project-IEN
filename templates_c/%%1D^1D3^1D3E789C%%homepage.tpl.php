<?php /* Smarty version 2.6.22, created on 2012-07-28 12:10:58
         compiled from page/homepage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'page/homepage.tpl', 2, false),array('function', 'label', 'page/homepage.tpl', 10, false),)), $this); ?>
<form id="fsearch" action="index.php?module=page&amp;action=show&amp;c=search" method="get" >
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
                                <ul class="units-wrapper">
                                <?php $_from = $this->_tpl_vars['list_institute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <li>
                                        <a class="units-link" href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_institute&amp;fil=<?php echo $this->_tpl_vars['item']['branch_name']; ?>
">
                                            
                                            <strong>
								<span style="color: rgb(128, 0, 0);"><?php echo $this->_tpl_vars['item']['branch_name']; ?>
</span>
                                            </strong>
                                        </a>
                                            </br>
                                            <?php echo smarty_function_label(array('get' => 'TXT_EMPLOYEES_LIST'), $this);?>

                                            <a href="/index.php?module=page&amp;action=show&amp;c=employee&amp;unit=<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']['nbEmployee']; ?>
</a>
                                   </li>
                                 <?php endforeach; endif; unset($_from); ?>
                                 <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=employee" ><?php echo smarty_function_label(array('get' => 'TXT_EMPLOYEES_ALL'), $this);?>
</a>
                                 </li>
                                </ul>
    

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
"/>

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>
    </div>

    </div>

    
					
			

</form>		
    
		<div class="span-11 center-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div id="content">
                            
			 <?php echo $this->_tpl_vars['page_content']; ?>
			
                        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="news-wrapper">
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
            <div id="tabArticle">
                
               
                <ul class="nav">
                 <li>  <img src="images/icons/script.png" alt="aktualnosci" /></li>
                <li class="nav-one"><a href="#featured" class="current"><?php echo smarty_function_label(array('get' => 'TXT_RECENTLY_ADD'), $this);?>
</a></li>
                <li class="nav-two"><a href="#core" class="current" class="straight-line"><?php echo smarty_function_label(array('get' => 'TXT_LASTMODIFIED'), $this);?>
</a></li>
                <li class="nav-three"><a href="#jquerytuts"class="current" ><?php echo smarty_function_label(array('get' => 'TXT_LASTVIEWS'), $this);?>
</a></li>
                
    </ul>
	       
    <div class="list-wrap">
	
		<ul id="featured">
			 <ul>
                                 <?php $_from = $this->_tpl_vars['arr_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <li>
                                             
                                            <div class="news-more">
                                                 <div class="news-date">
                                                   <b>  <?php echo $this->_tpl_vars['item']['created_dt']; ?>
 :
                                                 
                                                    <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"> <?php echo $this->_tpl_vars['item']['article_name']; ?>
  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"><?php echo smarty_function_label(array('get' => 'TXT_MORE'), $this);?>
</a>
                                             </div>
                                        </li>
                  
                                 <?php endforeach; endif; unset($_from); ?>
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" ><?php echo smarty_function_label(array('get' => 'TXT_ARTICLE_ALL'), $this);?>
</a>
                                 </li>
                       </ul>
		</ul>
		 
		 <ul id="core" class="hide">
			 <ul>
                                 <?php $_from = $this->_tpl_vars['lastmodified_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                      <li>
                                            <?php echo $this->_tpl_vars['fil_ariane']; ?>
 
                                            <div class="news-more">
                                                 <div class="news-date">
                                                   <b>  <?php echo $this->_tpl_vars['item']['md']; ?>
 :
                                                 
                                                    <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"> <?php echo $this->_tpl_vars['item']['article_name']; ?>
  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"><?php echo smarty_function_label(array('get' => 'TXT_MORE'), $this);?>
</a>
                                             </div>
                                        </li>
                  
                                 <?php endforeach; endif; unset($_from); ?>
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" ><?php echo smarty_function_label(array('get' => 'TXT_ARTICLE_ALL'), $this);?>
</a>
                                 </li>
                       </ul>
		 </ul>
		 
		 <ul id="jquerytuts" class="hide">
			 <ul>
                                 <?php $_from = $this->_tpl_vars['lastviews_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                       <li>
                                             
                                            <div class="news-more">
                                                 <div class="news-date">
                                                 <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"> <?php echo $this->_tpl_vars['item']['article_name']; ?>
  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"><?php echo smarty_function_label(array('get' => 'TXT_MORE'), $this);?>
</a>
                                             </div>
                                        </li>
                  
                                 <?php endforeach; endif; unset($_from); ?>
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" ><?php echo smarty_function_label(array('get' => 'TXT_ARTICLE_ALL'), $this);?>
</a>
                                 </li>
                       </ul>
		 </ul>
		 
		 
    </div> <!-- END List Wrap -->
 
 </div> <!-- END Organic Tabs (Example One) -->
 
                   
             
                       </div>
                                
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			
                              
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
            <ul>
                <?php $_from = $this->_tpl_vars['files_most_downloaded']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['loop']['iteration']++;
?>
                    <li>
                        <span style="float: left;">
                            <a class="file-image" href="download.php?file_id=<?php echo $this->_tpl_vars['item']['id']; ?>
">
                                <?php if (file_exists ( "/images/files_type/".($this->_tpl_vars['item']['file_type']).".32.gif" )): ?>
                                <img id="<?php echo $this->_tpl_vars['item']['file_type']; ?>
_<?php echo $this->_foreach['loop']['iteration']; ?>
" src="/images/files_type/<?php echo $this->_tpl_vars['item']['file_type']; ?>
.32.gif" style="border:0px;" alt="<?php echo $this->_tpl_vars['item']['file_type']; ?>
">
                                <?php else: ?>
                                <img id="<?php echo $this->_tpl_vars['item']['file_type']; ?>
_<?php echo $this->_foreach['loop']['iteration']; ?>
" src="/images/files_type/file.32.gif" style="border:0px;">
                                <?php endif; ?>
                                &nbsp;
                            </a>
                        </span>
                        <a href="download.php?file_id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['file_label']; ?>
"><?php echo $this->_tpl_vars['item']['file_label']; ?>
</a>
                        <br style="clear: both;">
                    </li>
                <?php endforeach; endif; unset($_from); ?>
        </div>

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>
<?php echo '
    <script type=\'text/javascript\'>
    $(document).ready(function() {

        $("#tabArticle").organicTabs();
        
       

    });
</script>
'; ?>