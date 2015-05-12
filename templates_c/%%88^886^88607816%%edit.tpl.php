<?php /* Smarty version 2.6.22, created on 2012-06-25 09:15:29
         compiled from articles/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'articles/edit.tpl', 1, false),array('modifier', 'default', 'articles/edit.tpl', 1, false),)), $this); ?>
<?php ob_start(); ?><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_ARTICLE_EDIT_TITLE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Edit article') : smarty_modifier_default($_tmp, 'Edit article'))), $this);?>
<?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_header.tpl", 'smarty_include_vars' => array('form_title' => 'Edycja menu')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form.tpl", 'smarty_include_vars' => array('form_name' => $this->_tpl_vars['form_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '<script>$(document).ready(function(){load_parent_menu();});</script>'; ?>