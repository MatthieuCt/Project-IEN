<?php /* Smarty version 2.6.22, created on 2012-07-03 10:11:33
         compiled from common/adminmenu.tpl */ ?>

<?php echo '

<link rel="stylesheet" type="text/css" href="/libs/superfish/css/superfish.css" media="screen">
<script type="text/javascript" src="/libs/superfish/css/js/hoverIntent.js"></script>
<script type="text/javascript" src="/libs/superfish/css/js/superfish.js"></script>
<script type="text/javascript">

// initialise plugins
jQuery(function(){
        jQuery(\'ul.sf-menu\').superfish();
});

</script>

'; ?>



<?php if ($_GET['module'] != 'page' && $_SESSION['S_GroupID'] > 0): ?>
<div class="span-24 last admin-menu noprint">
    <ul class="sf-menu">
        <?php $_from = $this->_tpl_vars['navigation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['loop1']['iteration']++;
?>
        <li>
            <a href="/index.php?module=<?php echo $this->_tpl_vars['item1']['module']; ?>
&amp;action=<?php echo $this->_tpl_vars['item1']['action']; ?>
">
                <span><?php echo $this->_tpl_vars['item1']['label']; ?>
</span>
            </a>
            <?php if ($this->_tpl_vars['item1']['submenu']): ?>
                <ul>
                    <?php $_from = $this->_tpl_vars['item1']['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['loop2']['iteration']++;
?>
                        <li>
                            <a href="/index.php?module=<?php echo $this->_tpl_vars['item2']['module']; ?>
&amp;action=<?php echo $this->_tpl_vars['item2']['action']; ?>
">
                                <span><?php echo $this->_tpl_vars['item2']['label']; ?>
</span>
                            </a>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            <?php endif; ?>
        </li>

        <?php endforeach; endif; unset($_from); ?>
    </ul>

</div>
<?php endif; ?>

<br style="clear: left" />