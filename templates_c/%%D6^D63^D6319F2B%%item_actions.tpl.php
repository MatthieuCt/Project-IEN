<?php /* Smarty version 2.6.22, created on 2012-07-03 10:11:34
         compiled from common/item_actions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'common/item_actions.tpl', 8, false),array('modifier', 'default', 'common/item_actions.tpl', 8, false),)), $this); ?>

<?php if ($_SESSION['S_GroupID'] > 0): ?>

<div style="text-align: center; min-width: 100px; padding: 0; margin: 0;  ">
<?php if (isset ( $this->_tpl_vars['page_edit'] )): ?>
<a 
    <?php if ($this->_tpl_vars['page_id'] != ""): ?>
        title="<?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_EDIT_PAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Edit content') : smarty_modifier_default($_tmp, 'Edit content'))), $this);?>
" 
    <?php else: ?>
        title="<?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_CREATE_PAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Create content') : smarty_modifier_default($_tmp, 'Create content'))), $this);?>
"
    <?php endif; ?>
    href="/index.php?module=editor&amp;action=page&amp;page_id=<?php echo $this->_tpl_vars['page_id']; ?>
&amp;return_module=<?php echo $this->_tpl_vars['current_module']; ?>
&amp;return_action=list<?php echo $this->_tpl_vars['params']; ?>
">
    <img 
        <?php if ($this->_tpl_vars['page_id'] != ""): ?>
            src="/images/page-edit.png"
        <?php else: ?>
            src="/images/page-new.png"
        <?php endif; ?> border=0
        <?php if ($this->_tpl_vars['page_id'] != ""): ?>
            alt="<?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_EDIT_PAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Edit content') : smarty_modifier_default($_tmp, 'Edit content'))), $this);?>
" 
        <?php else: ?>
            alt="<?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_CREATE_PAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Create content') : smarty_modifier_default($_tmp, 'Create content'))), $this);?>
"
        <?php endif; ?>/>
</a>
&nbsp;&nbsp;
<?php endif; ?>
<?php if ($this->_tpl_vars['enable'] == 1): ?>
<a title="<?php echo smarty_function_label(array('get' => 'LABEL_ENABLE'), $this);?>
" href="javascript:confirm_action('', '<?php echo $this->_tpl_vars['current_module']; ?>
', '<?php echo $this->_tpl_vars['prefix']; ?>
enable<?php echo $this->_tpl_vars['postfix']; ?>
','<?php echo $this->_tpl_vars['id']; ?>
')"><img src="/images/enable.png" border=0 alt="<?php echo smarty_function_label(array('get' => 'LABEL_ENABLE'), $this);?>
" /></a>
&nbsp;&nbsp;
<?php endif; ?>
<?php if ($this->_tpl_vars['disable'] == 1): ?>
<a title="<?php echo smarty_function_label(array('get' => 'LABEL_DISABLE'), $this);?>
" href="javascript:confirm_action('', '<?php echo $this->_tpl_vars['current_module']; ?>
', '<?php echo $this->_tpl_vars['prefix']; ?>
disable<?php echo $this->_tpl_vars['postfix']; ?>
','<?php echo $this->_tpl_vars['id']; ?>
')"><img src="/images/disable.png" border=0 alt="<?php echo smarty_function_label(array('get' => 'LABEL_DISABLE'), $this);?>
" /></a>
&nbsp;&nbsp;
<?php endif; ?>
<?php if ($this->_tpl_vars['nodelete'] != 1): ?>
<a title="<?php echo smarty_function_label(array('get' => 'LABEL_DELETE'), $this);?>
" href="javascript:confirm_action('<?php echo smarty_function_label(array('get' => 'LABEL_DELETE_CONFIRM'), $this);?>
', '<?php echo $this->_tpl_vars['current_module']; ?>
', '<?php echo $this->_tpl_vars['prefix']; ?>
delete<?php echo $this->_tpl_vars['postfix']; ?>
','<?php echo $this->_tpl_vars['id']; ?>
')"><img src="/images/delete.png" border=0 alt="<?php echo smarty_function_label(array('get' => 'LABEL_DELETE'), $this);?>
" /></a>
<?php endif; ?>
&nbsp;&nbsp;
<?php if ($this->_tpl_vars['noedit'] != 1): ?>
<a title="<?php echo smarty_function_label(array('get' => 'LABEL_EDIT'), $this);?>
" href="javascript:confirm_action('', '<?php echo $this->_tpl_vars['current_module']; ?>
', '<?php echo $this->_tpl_vars['prefix']; ?>
edit<?php echo $this->_tpl_vars['postfix']; ?>
','<?php echo $this->_tpl_vars['id']; ?>
')"><img src="/images/edit.png" border=0 alt="<?php echo smarty_function_label(array('get' => 'LABEL_EDIT'), $this);?>
" /></a>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['print'] )): ?>
<img style="cursor: pointer" src="/images/printer.png" border=0 onclick="javascript:document.location='print.php?module=<?php echo $this->_tpl_vars['module']; ?>
&action=<?php echo $this->_tpl_vars['action']; ?>
&fid=<?php echo $this->_tpl_vars['id']; ?>
&id=<?php echo $this->_tpl_vars['zid']; ?>
&return_module=<?php echo $this->_tpl_vars['retmod']; ?>
&return_action=<?php echo $this->_tpl_vars['retact']; ?>
'">
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['custom'] )): ?>
<?php echo $this->_tpl_vars['custom']; ?>

<?php endif; ?>
</div>
<?php endif; ?>