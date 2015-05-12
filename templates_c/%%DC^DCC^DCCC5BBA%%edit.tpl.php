<?php /* Smarty version 2.6.22, created on 2012-05-28 09:34:59
         compiled from permission/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'permission/edit.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_label(array('get' => 'TXT_PERMISSION_EDIT','assign' => 'TXT_PERMISSION_EDIT'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_header.tpl", 'smarty_include_vars' => array('form_title' => $this->_tpl_vars['TXT_PERMISSION_EDIT'])));
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