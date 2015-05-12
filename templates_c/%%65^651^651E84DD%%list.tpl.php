<?php /* Smarty version 2.6.22, created on 2012-06-25 11:22:18
         compiled from employee/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'employee/list.tpl', 13, false),array('modifier', 'default', 'employee/list.tpl', 13, false),)), $this); ?>
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
       <!--  <th class="list_table_label" style="width: 15%">ID</th>
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_LANG')) ? $this->_run_mod_handler('default', true, $_tmp, 'Language') : smarty_modifier_default($_tmp, 'Language'))), $this);?>
</th>-->
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_NAME')) ? $this->_run_mod_handler('default', true, $_tmp, 'Name') : smarty_modifier_default($_tmp, 'Name'))), $this);?>
</th>
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_SURNAME')) ? $this->_run_mod_handler('default', true, $_tmp, 'Surname') : smarty_modifier_default($_tmp, 'Surname'))), $this);?>
</th>
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_EMAIL')) ? $this->_run_mod_handler('default', true, $_tmp, 'Email') : smarty_modifier_default($_tmp, 'Email'))), $this);?>
</th> 
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_TITLE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Title') : smarty_modifier_default($_tmp, 'Title'))), $this);?>
</th>
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_BRANCH')) ? $this->_run_mod_handler('default', true, $_tmp, 'Branch') : smarty_modifier_default($_tmp, 'Branch'))), $this);?>
</th>
        <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_FUNCTION')) ? $this->_run_mod_handler('default', true, $_tmp, 'Function') : smarty_modifier_default($_tmp, 'Function'))), $this);?>
</th>
       <th class="list_table_label" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_EMPLOYEE_PHONE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Phone Number') : smarty_modifier_default($_tmp, 'Phone Number'))), $this);?>
 </th> 
      <!--   <th class="list_table_label" style="width: 15%"> page </th>-->
        <th class="list_table_label narrow" style="width: 7%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_OPERACJE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Operations') : smarty_modifier_default($_tmp, 'Operations'))), $this);?>
</th>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr>
            <!--<td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['user_id']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['lang_name']; ?>
</td>    too much information -->
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['user_name']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['user_surname']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['user_email']; ?>
</td>            
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['branch_name']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['function_name']; ?>
</td>
            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['phone']; ?>
</td>
          <!--   <td class="list_table_data"><?php echo $this->_tpl_vars['item']['page_id']; ?>
</td>-->
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