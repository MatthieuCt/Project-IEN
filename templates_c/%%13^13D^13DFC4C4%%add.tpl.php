<?php /* Smarty version 2.6.22, created on 2012-06-04 12:53:33
         compiled from menu/add.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_header.tpl", 'smarty_include_vars' => array('form_title' => 'Dodaj nowe uprawnienie')));
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
