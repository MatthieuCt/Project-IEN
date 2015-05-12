<?php /* Smarty version 2.6.22, created on 2012-07-03 11:58:49
         compiled from blogs/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'blogs/list.tpl', 15, false),array('modifier', 'default', 'blogs/list.tpl', 15, false),)), $this); ?>
<!--  start content-table-inner ...................................................................... START -->

<div id="content-table-inner">
            
    
            
            <div id="table-content" style="width: 35%;float:left;">
           
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/table.tpl", 'smarty_include_vars' => array('table_name' => "product-table",'detail' => 'details')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <table id="product-table"  class="display">
                    <thead>
                        <tr>
                            <th class="list_table_label sorting" style="width: 30%">Blog ID</th>
                            <th class="list_table_label sorting" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_BLOG_EMPLOYEE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Employee ID') : smarty_modifier_default($_tmp, 'Employee ID'))), $this);?>
</th>
                            <th class="list_table_label sorting" style="width: 15%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_BLOG_NAME')) ? $this->_run_mod_handler('default', true, $_tmp, 'Blog name') : smarty_modifier_default($_tmp, 'Blog name'))), $this);?>
</th>
                            <th class="list_table_label narrow" style="width: 7%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='LABEL_OPERACJE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Operations') : smarty_modifier_default($_tmp, 'Operations'))), $this);?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                        <tr>
                            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['id']; ?>
</td>
                            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['employee_id']; ?>
</td>
                            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['blog_name']; ?>
</td>
                            <td class="list_table_data" id_data="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        </tr>

                    <?php endforeach; endif; unset($_from); ?>
                   
                </tbody>
                         
                        </table>
        
             
            </div>
                    
                           
</div>
                    
    <div id="details" style="width: 63%;float:right;">
    </div>