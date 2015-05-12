<?php /* Smarty version 2.6.22, created on 2012-07-03 11:58:52
         compiled from blogs/details.tpl */ ?>
<table id="product-table"  class="display">

<a href="/index.php?module=editor&amp;action=page&amp;page_id=<?php echo $this->_tpl_vars['item']['id']; ?>
&amp;return_module=<?php echo $this->_tpl_vars['current_module']; ?>
&amp;return_action=list<?php echo $this->_tpl_vars['params']; ?>
">Add a page to this blog</a>    
    
<tbody>
<?php $_from = $this->_tpl_vars['data_blog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <thead>
        <tr>
            <th><?php echo $this->_tpl_vars['item']['page_name']; ?>
</th>
        <th><a href="/index.php?module=editor&amp;action=page&amp;page_id=<?php echo $this->_tpl_vars['item']['id']; ?>
&amp;return_module=<?php echo $this->_tpl_vars['current_module']; ?>
&amp;return_action=list<?php echo $this->_tpl_vars['params']; ?>
">edit content</a></th>
        <th><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/item_actions.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['item']['id'],'noedit' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></th>
        </tr>
   </thead>
    
    
   <tr>

       <td class="list_table_data">
            <?php echo $this->_tpl_vars['item']['page_content']; ?>

        </td>

    </tr>

<?php endforeach; endif; unset($_from); ?>
</tbody>
</table>