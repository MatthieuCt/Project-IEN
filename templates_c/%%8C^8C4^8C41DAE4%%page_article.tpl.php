<?php /* Smarty version 2.6.22, created on 2012-07-16 20:57:13
         compiled from common/page_article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'common/page_article.tpl', 17, false),array('modifier', 'default', 'common/page_article.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/filsdariane.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="span-16 left-column first">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div class="noprint" 
          style="float: right; background-color: #f3f3f3; border: 1px solid rgb(188, 210, 230); 
                  padding: 5px; margin: -10px 0px 10px 10px;">
        <a title="Drukuj" href="javascript:window.print();">
          <img alt="print page" style="vertical-align: middle; margin-bottom: 2px;" src="http://www2.ien.pw.edu.pl/images/print.png" />Drukuj  
        </a><br />
      </div>
                        
        <div id="content">
             
            <?php if ($_GET['c'] == 'employee'): ?>
                <ul class="NoBullet">
                <?php if ($this->_tpl_vars['user_list'] == ""): ?>
                    <?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPTY')) ? $this->_run_mod_handler('default', true, $_tmp, "Brak wyników.") : smarty_modifier_default($_tmp, "Brak wyników."))), $this);?>

                <?php else: ?>
                <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    
                    <li>
                    <div>
                <h5><?php echo $this->_tpl_vars['item']['title']; ?>
 <?php echo $this->_tpl_vars['item']['user_name']; ?>
</h5>
                <strong><?php echo $this->_tpl_vars['item']['function_name']; ?>
</strong></br>
                <?php echo $this->_tpl_vars['item']['user_email']; ?>
<br/>
                <?php echo $this->_tpl_vars['item']['phone']; ?>
<br/>
                </div><br/>
                </li>
                <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </ul>
             <?php elseif ($_GET['c'] == 'article'): ?>
                 <div class="news-wrapper">
                     <?php $_from = $this->_tpl_vars['article_nb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['loop']['iteration']++;
?>
                        <?php if (( ! isset ( $_GET['nb'] ) && $this->_foreach['loop']['iteration'] == '1' ) || $_GET['nb'] == $this->_tpl_vars['item']): ?>
                            [<?php echo $this->_tpl_vars['item']; ?>
]
                        <?php else: ?>    
                            <a href="/index.php?module=page&amp;action=show&amp;c=article&amp;page_type=page_article&amp;nb=<?php echo $this->_tpl_vars['item']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
                        <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?>
                  <ul>
                      <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                          <li>
                        <div class="news-content">
                         <?php echo $this->_tpl_vars['item']['article_name']; ?>
 <br/>
                         </div>
                       <div class="news-more"><br/>
                            <div class="news-date">
                                 <?php echo $this->_tpl_vars['item']['created_dt']; ?>
 <br/>
                                  </div>
                            <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article"><?php echo smarty_function_label(array('get' => 'TXT_MORE'), $this);?>
</a>
                            </div>
                                </li>
                         <?php endforeach; endif; unset($_from); ?>
                          </ul>
                      </div>
               <?php else: ?>
               <?php echo $this->_tpl_vars['page_content']; ?>

               <div class="files-wrapper">
                   <ul>
                       <?php $_from = $this->_tpl_vars['files_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
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
                               <a href="../../download.php?file_id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['file_label']; ?>
"><?php echo $this->_tpl_vars['item']['file_label']; ?>
</a>
                               <br style="clear: both;">
                           </li>
                       <?php endforeach; endif; unset($_from); ?>
               </div>
               <br/>
               <?php echo $this->_tpl_vars['page_type']; ?>

            <?php endif; ?>
           
            

            
        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		
</div>
<div class="span-7 last right-column noprint">
  <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      
      
      
      <div class="news-wrapper">
        <h3><img alt="Artykul" src="images/icons/script.png" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_ARTICLELASTREAD'), $this);?>
</h3>
        <?php echo ((is_array($_tmp=@$this->_tpl_vars['box_article_lastreaded'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['TXT_NOARTICLES']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['TXT_NOARTICLES'])); ?>

        
        
        
        
         <div class="news-wrapper">
           
                        <ul>
                                 <?php $_from = $this->_tpl_vars['frequently_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <li>
                                             <div class="news-content">
                                                 <?php echo $this->_tpl_vars['item']['article_name']; ?>
 
                                             </div>
                                              <div class="news-more">
                                                  <div class="news-date">
                                                     <?php echo $this->_tpl_vars['item']['created_dt']; ?>
 
                                                   </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['item']['page_id']; ?>
&amp;page_type=page_article&amp;fil=<?php echo $this->_tpl_vars['item']['article_name']; ?>
"><?php echo smarty_function_label(array('get' => 'TXT_MORE'), $this);?>
</a>
                                             </div>
                                        </li>
                  
                                 <?php endforeach; endif; unset($_from); ?>
                                 
                       </ul>
                       </div>
        
        
        
      </div>

      <div class="news-wrapper">
        <h3><img alt="Artykul" src="images/icons/script.png" />&nbsp;<?php echo smarty_function_label(array('get' => 'TXT_RECENTLY_ADD'), $this);?>
</h3>
        <?php echo ((is_array($_tmp=@$this->_tpl_vars['box_article_new'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['TXT_NOARTICLES']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['TXT_NOARTICLES'])); ?>

        
        
         <div class="news-wrapper">
           
                        <ul>
                                 <?php $_from = $this->_tpl_vars['arr_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <li>
                                             <div class="news-content">
                                                 <?php echo $this->_tpl_vars['item']['article_name']; ?>
 
                                             </div>
                                              <div class="news-more">
                                                  <div class="news-date">
                                                     <?php echo $this->_tpl_vars['item']['created_dt']; ?>
 
                                                   </div>
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
                       </div>
      </div>
      

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>