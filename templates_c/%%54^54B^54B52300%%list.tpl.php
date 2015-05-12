<?php /* Smarty version 2.6.22, created on 2012-06-25 11:42:12
         compiled from articles/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'articles/list.tpl', 13, false),array('modifier', 'default', 'articles/list.tpl', 13, false),)), $this); ?>
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

                        <th class="list_table_label" style="width: 11%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_ARTICLE_LANG')) ? $this->_run_mod_handler('default', true, $_tmp, 'Lang') : smarty_modifier_default($_tmp, 'Lang'))), $this);?>
</th>
                        <th class="list_table_label" style="width: 11%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_ARTICLE_NAME')) ? $this->_run_mod_handler('default', true, $_tmp, 'Article name') : smarty_modifier_default($_tmp, 'Article name'))), $this);?>
</th>
                        <th class="list_table_label" style="width: 11%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_ARTICLE_PAGE')) ? $this->_run_mod_handler('default', true, $_tmp, 'Page') : smarty_modifier_default($_tmp, 'Page'))), $this);?>
</th>
                        <th class="list_table_label" style="width: 11%"><?php echo smarty_function_label(array('get' => ((is_array($_tmp='TXT_ARTICLE_PUBLISH')) ? $this->_run_mod_handler('default', true, $_tmp, 'Publish') : smarty_modifier_default($_tmp, 'Publish'))), $this);?>
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
"><?php echo $this->_tpl_vars['item']['langname']; ?>
</td>
                            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['article_name']; ?>
</td> 
                            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['page_id']; ?>
</td>
                            <td class="list_table_data"><?php echo $this->_tpl_vars['item']['article_publish']; ?>
</td>
                            <?php if ($this->_tpl_vars['item']['visible_flag'] == ""): ?><?php $this->assign('page_edit', '0'); ?>
                            <?php else: ?><?php $this->assign('page_edit', '1'); ?><?php endif; ?>
                            <td class="list_table_data">
                            <?php if ($this->_tpl_vars['item']['visible_flag'] == 0): ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'],'enable' => 1,'page_edit' => $this->_tpl_vars['page_edit'],'page_id' => ($this->_tpl_vars['item']['page_id']),'params' => "&amp;article_id=".($this->_tpl_vars['item']['id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php else: ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'],'disable' => 1,'page_edit' => $this->_tpl_vars['page_edit'],'page_id' => ($this->_tpl_vars['item']['page_id']),'params' => "&amp;article_id=".($this->_tpl_vars['item']['id']))));
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