<?php /* Smarty version 2.6.22, created on 2012-06-26 11:07:37
         compiled from permission/list.tpl */ ?>
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
        <th class="list_table_label" style="width: 50%">Group</th>
        <th class="list_table_label" style="width: 20%">Module</th>
        <th class="list_table_label">Akcja</th>
        <th class="list_table_label narrow" style="width: 7%">Operation</th> 
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr>
            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['data'][$this->_sections['item_id']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['module']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['action']; ?>
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