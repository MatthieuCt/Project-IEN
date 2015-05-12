<?php /* Smarty version 2.6.22, created on 2012-06-09 16:21:13
         compiled from labels/list.tpl */ ?>
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
        <th class="list_table_label" style="width: 33%">langue</th>
        <th class="list_table_label" style="width: 33%">label name</th>
        <th class="list_table_label" style="width: 15%">label value</th>
        <th class="list_table_label narrow" style="width: 7%">Operacje</th>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr>
            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['langname']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['label_name']; ?>
</td> 
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['label_value']; ?>
</td> 
            <td class="list_table_data">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>

    <?php endforeach; endif; unset($_from); ?>
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>