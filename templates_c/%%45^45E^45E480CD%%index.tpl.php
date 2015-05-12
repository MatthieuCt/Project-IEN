<?php /* Smarty version 2.6.22, created on 2012-06-25 10:57:56
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 27, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	
	<meta name="language" content="pl" />
        
        <?php if (isset ( $_GET['page_id'] )): ?>
            <?php 
                    require_once 'CmsPage.php';
                    $page = new CmsPage();
                    $data_meta = $page->getMeta($_GET['page_id']);
                    
                    echo "<title>".$data_meta['META_TITLE']."</title>";
                    echo "<meta name='description' content='".$data_meta['META_DESCRIPTION']."'>";
                    echo "<meta name='keywords' content='".$data_meta['META_KEYWORDS']."'>";
             ?>
        <?php endif; ?>


	<?php echo $this->_tpl_vars['JSScripts']; ?>

	
	<?php echo $this->_tpl_vars['Csses']; ?>


</head>
<body onload="<?php echo $this->_tpl_vars['OnLoad']; ?>
">
<?php echo ((is_array($_tmp=@$this->_tpl_vars['Content'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Brak tresci strony') : smarty_modifier_default($_tmp, 'Brak tresci strony')); ?>

</body>
</html>