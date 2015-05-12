<?php /* Smarty version 2.6.22, created on 2012-07-03 09:57:43
         compiled from common/menu.tpl */ ?>
<ul id="top-menu" class="solidblockmenu">
    <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['loop1']['iteration']++;
?>
        <li id="menu-<?php echo $this->_tpl_vars['item1']['page_id']; ?>
">
            <a href="/index.php?module=<?php echo $this->_tpl_vars['item1']['module']; ?>
&amp;action=<?php echo $this->_tpl_vars['item1']['action']; ?>
&amp;page_id=<?php echo $this->_tpl_vars['item1']['page_id']; ?>
">
                <span><?php echo $this->_tpl_vars['item1']['label']; ?>
</span>
            </a>
        </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>

<?php $_from = $this->_tpl_vars['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['loop2']['iteration']++;
?>
    <div id="submenu-<?php echo $this->_tpl_vars['key2']; ?>
" class="dropmenudiv" style="display:none;">
        <ul>
            <?php $_from = $this->_tpl_vars['submenu'][$this->_tpl_vars['key2']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key3'] => $this->_tpl_vars['item3']):
        $this->_foreach['loop3']['iteration']++;
?>
                <li>
                    <a href="/index.php?module=<?php echo $this->_tpl_vars['item3']['module']; ?>
&amp;action=<?php echo $this->_tpl_vars['item3']['action']; ?>
&amp;page_id=<?php echo $this->_tpl_vars['item3']['page_id']; ?>
">
                        <span><?php echo $this->_tpl_vars['item3']['label']; ?>
</span>
                    </a>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>	
<?php endforeach; endif; unset($_from); ?>

<br style="clear: left" />