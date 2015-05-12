<?php /* Smarty version 2.6.22, created on 2012-06-26 08:26:32
         compiled from lang/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'lang/list.tpl', 12, false),array('modifier', 'default', 'lang/list.tpl', 12, false),)), $this); ?>
<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

        <!--  start table-content  -->
        <div id="table-content">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/table.tpl", 'smarty_include_vars' => array('table_name' => "product-table")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 33%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_LANG_LANGUAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Language flag') : smarty_modifier_default($_tmp, 'Language flag'))), $this);?>
</th>
        <th class="list_table_label" style="width: 33%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_LANG_SHORT')) ? $this->_run_mod_handler('default', true, $_tmp, 'Language') : smarty_modifier_default($_tmp, 'Language'))), $this);?>
</th>
        <th class="list_table_label narrow" style="width: 33%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_OPERACJE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Operations') : smarty_modifier_default($_tmp, 'Operations'))), $this);?>
</th>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr>
            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
">
                <img src="../../images/icons/<?php if ($this->_tpl_vars['item']['id'] == 1): ?>pl<?php elseif ($this->_tpl_vars['item']['id'] == 2): ?>gb<?php else: ?>fr<?php endif; ?>.png" 
                     alt="<?php if ($this->_tpl_vars['item']['id'] == 1): ?>polish flag<?php elseif ($this->_tpl_vars['item']['id'] == 2): ?>english flag<?php else: ?>french flag<?php endif; ?>"
                />
            </td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['lang_short']; ?>
</td>
            <td class="list_table_data">
                <?php if ($this->_tpl_vars['item']['active'] == 0): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'],'enable' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'],'disable' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; endif; unset($_from); ?>
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>