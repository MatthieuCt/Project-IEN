<?php /* Smarty version 2.6.22, created on 2012-07-03 09:57:43
         compiled from common/flags.tpl */ ?>
<div id=flags>
    <ul class="top-menu-ul" style="float:left">
        <?php $_from = $this->_tpl_vars['lang_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop']['iteration']++;
?>
            <li class="flag">
                <a id="flag-<?php echo $this->_tpl_vars['item']['id']; ?>
<?php if ($_SESSION['S_LangID'] == $this->_tpl_vars['item']['id']): ?>-selected<?php endif; ?>" 
                   class="flag" href="<?php echo $_SERVER['PHP_SELF']; ?>
?lang_id=<?php echo $this->_tpl_vars['item']['id']; ?>
" 
                    <?php if (($this->_foreach['loop']['iteration'] <= 1) && ($this->_foreach['loop']['iteration'] == $this->_foreach['loop']['total'])): ?>style="border-left:none; border-right:none;"
                    <?php elseif (($this->_foreach['loop']['iteration'] <= 1)): ?>style="border-left:none"
                    <?php elseif (($this->_foreach['loop']['iteration'] == $this->_foreach['loop']['total'])): ?>style="border-right:none" 
                    <?php endif; ?>
                   ></a></li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>