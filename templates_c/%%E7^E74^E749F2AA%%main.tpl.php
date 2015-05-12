<?php /* Smarty version 2.6.22, created on 2012-07-10 19:01:13
         compiled from common/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'common/main.tpl', 11, false),)), $this); ?>
<div class="container">
    <div class="span-24 last top-menu top-box noprint">

        <div style="padding: 10px 20px 0px 20px;">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/flags.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <ul class="top-menu-ul">
                <li>
                    <a style="border-left:none" href="http://www.bg.pw.edu.pl">
                        <span style="float:left"><img src="images/icons/book_open.png" alt="" /></span>
                        <span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_LIBRARY'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_LIBRARY') : smarty_modifier_default($_tmp, 'TXT_LIBRARY')); ?>
</span>
                        <br style="clear:both" />
                    </a>
                </li>
                <li><a href="http://www.pw.edu.pl"><span style="float:left"><img src="images/icons/pw.png" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_PW'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_PW') : smarty_modifier_default($_tmp, 'TXT_PW')); ?>
</span><br style="clear:both" /></a></li>
                <li><a href="http://www.ee.pw.edu.pl"><span style="float:left"><img src="images/icons/ee.png" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_WEE'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_WEE') : smarty_modifier_default($_tmp, 'TXT_WEE')); ?>
</span><br style="clear:both" /></a></li>
                                <li><a href="http://webmail.ee.pw.edu.pl"><span style="float:left"><img src="images/icons/email.png" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_WEBMAIL'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_WEBMAIL') : smarty_modifier_default($_tmp, 'TXT_WEBMAIL')); ?>
</span><br style="clear:both" /></a></li>
                <?php if ($_SESSION['S_UserID'] == "" || $_SESSION['S_UserID'] == 0): ?>
                    <li><a style="border-right:none" href="/user/login/index.html"><span style="float:left"><img src="images/icons/login.gif" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_LOGIN'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_LOGIN') : smarty_modifier_default($_tmp, 'TXT_LOGIN')); ?>
</span><br style="clear:both" /></a></li>
                <?php else: ?>
                    <li><a href="/administration/dashboard/index.html"><span style="float:left"><img src="images/icons/dashboard.png" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_DASHBOARD'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_DASHBOARD') : smarty_modifier_default($_tmp, 'TXT_DASHBOARD')); ?>
</span><br style="clear:both" /></a></li>
                    <li><a style="border-right:none" href="/user/logout/index.html"><span style="float:left"><img src="images/icons/login.gif" alt="" /></span><span style="float:left; padding:2px 4px;"><?php echo ((is_array($_tmp=@$this->_tpl_vars['labels']['TXT_LOGOUT'])) ? $this->_run_mod_handler('default', true, $_tmp, 'TXT_LOGOUT') : smarty_modifier_default($_tmp, 'TXT_LOGOUT')); ?>
</span><br style="clear:both" /></a></li>
                
                <?php endif; ?>
            </ul>

        </div>
        
       
        <div class="span-20 first" >
            <?php echo $this->_tpl_vars['arrayLabels']['FRONT_TOP_LEFT']; ?>

           
             
        </div>
              



    </div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="span-24 last main-menu noprint">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    </div>
  
    
        
    <?php if ($this->_tpl_vars['current_module'] != 'page' && $_SESSION['S_GroupID'] > 0): ?> 
    
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/adminmenu.tpl", 'smarty_include_vars' => array('from' => $this->_tpl_vars['menu'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php else: ?>

        <div class="span-24 last main-menu-shadow noprint"></div>

    <?php endif; ?> 

    <div class="span-24 last main-content" style="min-height: 450px;">
        <div class="span-24 vertical-spacer last noprint"></div>


        
              
            <?php if ($this->_tpl_vars['current_module'] == 'page' && $this->_tpl_vars['current_action'] == 'homepage'): ?> 
               <?php echo $this->_tpl_vars['page']; ?>

            <?php elseif ($_GET['module'] == 'article'): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/page_article.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?> 
                <?php echo ((is_array($_tmp=@$this->_tpl_vars['page'])) ? $this->_run_mod_handler('default', true, $_tmp, "<p>Brak treści</p>") : smarty_modifier_default($_tmp, "<p>Brak treści</p>")); ?>


            <?php endif; ?>

       


        <div class="span-24 vertical-spacer last noprint"></div>
    </div>


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>
<?php if (@MODE == 'DEBUG'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/debug.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>