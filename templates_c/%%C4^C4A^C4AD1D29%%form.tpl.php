<?php /* Smarty version 2.6.22, created on 2012-07-10 13:31:51
         compiled from common/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'common/form.tpl', 3, false),array('modifier', 'count', 'common/form.tpl', 47, false),array('function', 'array', 'common/form.tpl', 39, false),array('function', 'label', 'common/form.tpl', 86, false),)), $this); ?>

<form enctype="multipart/form-data" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_name']; ?>
" 
action="index.php?module=<?php echo $this->_tpl_vars['current_module']; ?>
&action=<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['form_save'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".php", "") : smarty_modifier_replace($_tmp, ".php", "")); ?>
" method="POST">


<?php if (! isset ( $_GET['return_module'] )): ?>
    <input type=hidden name="return_module" value="<?php echo $this->_tpl_vars['form']['return_module']; ?>
" />
    <?php $this->assign('return_module', $this->_tpl_vars['form']['return_module']); ?>
<?php else: ?>
    <input type=hidden name="return_module" value="<?php echo $_GET['return_module']; ?>
" />
    <?php $this->assign('return_module', $_GET['return_module']); ?>
<?php endif; ?>
<?php if (! isset ( $_GET['return_action'] )): ?>
    <input type=hidden name="return_action" value="<?php echo $this->_tpl_vars['form']['return_action']; ?>
" />
    <?php $this->assign('return_action', $this->_tpl_vars['form']['return_action']); ?>
<?php else: ?>
    <input type=hidden name="return_action" value="<?php echo $_GET['return_action']; ?>
" />
    <?php $this->assign('return_action', $_GET['return_action']); ?>
<?php endif; ?>


<?php $_from = $_GET; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <?php if ($this->_tpl_vars['key'] != 'return_module' && $this->_tpl_vars['key'] != 'return_action' && $this->_tpl_vars['key'] != 'id' && $this->_tpl_vars['key'] != 'module' && $this->_tpl_vars['key'] != 'action' && $this->_tpl_vars['key'] != 'page_id'): ?>
        <input type=hidden name="ext_<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['item']; ?>
" />
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
 
<input type=hidden name="id" value="<?php echo $this->_tpl_vars['form']['id']; ?>
">
<input type=hidden name="current_module" value="<?php echo $this->_tpl_vars['current_module']; ?>
" />
<input type=hidden name="current_action" value="<?php echo $this->_tpl_vars['current_action']; ?>
" />

<?php $this->assign('tab', 'yes'); ?>
<?php $this->assign('lasttab', ""); ?>
<?php $_from = $this->_tpl_vars['form']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <?php if ($this->_tpl_vars['item']['tab'] != ""): ?>
        <?php if ($this->_tpl_vars['lasttab'] != $this->_tpl_vars['item']['tab']): ?>
            <?php $this->assign('lasttab', $this->_tpl_vars['item']['tab']); ?> 
            <?php echo smarty_function_array(array('var' => 'arrTabs','value' => $this->_tpl_vars['item']['tab']), $this);?>
 
        <?php endif; ?>
    <?php else: ?>
        <?php $this->assign('tab', 'no'); ?>
    <?php endif; ?> 
<?php endforeach; endif; unset($_from); ?>

<?php if (( count($this->_tpl_vars['arrTabs']) == 0 ) || ( $this->_tpl_vars['tab'] == 'no' )): ?><?php $this->assign('arrTabs',array("Content")); ?><?php endif; ?>

<?php if ($this->_tpl_vars['tab'] == 'yes'): ?>
<div id="tabs">
    <ul class="nav">
        <?php unset($this->_sections['name']);
$this->_sections['name']['name'] = 'name';
$this->_sections['name']['loop'] = is_array($_loop=$this->_tpl_vars['arrTabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['name']['show'] = true;
$this->_sections['name']['max'] = $this->_sections['name']['loop'];
$this->_sections['name']['step'] = 1;
$this->_sections['name']['start'] = $this->_sections['name']['step'] > 0 ? 0 : $this->_sections['name']['loop']-1;
if ($this->_sections['name']['show']) {
    $this->_sections['name']['total'] = $this->_sections['name']['loop'];
    if ($this->_sections['name']['total'] == 0)
        $this->_sections['name']['show'] = false;
} else
    $this->_sections['name']['total'] = 0;
if ($this->_sections['name']['show']):

            for ($this->_sections['name']['index'] = $this->_sections['name']['start'], $this->_sections['name']['iteration'] = 1;
                 $this->_sections['name']['iteration'] <= $this->_sections['name']['total'];
                 $this->_sections['name']['index'] += $this->_sections['name']['step'], $this->_sections['name']['iteration']++):
$this->_sections['name']['rownum'] = $this->_sections['name']['iteration'];
$this->_sections['name']['index_prev'] = $this->_sections['name']['index'] - $this->_sections['name']['step'];
$this->_sections['name']['index_next'] = $this->_sections['name']['index'] + $this->_sections['name']['step'];
$this->_sections['name']['first']      = ($this->_sections['name']['iteration'] == 1);
$this->_sections['name']['last']       = ($this->_sections['name']['iteration'] == $this->_sections['name']['total']);
?>
            <li id ='tab-<?php echo $this->_tpl_vars['arrTabs'][$this->_sections['name']['index']]; ?>
'><a href='#<?php echo $this->_tpl_vars['arrTabs'][$this->_sections['name']['index']]; ?>
'><?php echo $this->_tpl_vars['arrTabs'][$this->_sections['name']['index']]; ?>
</a></li>
        <?php endfor; endif; ?>
    </ul>
    <div class="list-wrap">
<?php endif; ?>
<?php unset($this->_sections['name']);
$this->_sections['name']['name'] = 'name';
$this->_sections['name']['loop'] = is_array($_loop=$this->_tpl_vars['arrTabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['name']['show'] = true;
$this->_sections['name']['max'] = $this->_sections['name']['loop'];
$this->_sections['name']['step'] = 1;
$this->_sections['name']['start'] = $this->_sections['name']['step'] > 0 ? 0 : $this->_sections['name']['loop']-1;
if ($this->_sections['name']['show']) {
    $this->_sections['name']['total'] = $this->_sections['name']['loop'];
    if ($this->_sections['name']['total'] == 0)
        $this->_sections['name']['show'] = false;
} else
    $this->_sections['name']['total'] = 0;
if ($this->_sections['name']['show']):

            for ($this->_sections['name']['index'] = $this->_sections['name']['start'], $this->_sections['name']['iteration'] = 1;
                 $this->_sections['name']['iteration'] <= $this->_sections['name']['total'];
                 $this->_sections['name']['index'] += $this->_sections['name']['step'], $this->_sections['name']['iteration']++):
$this->_sections['name']['rownum'] = $this->_sections['name']['iteration'];
$this->_sections['name']['index_prev'] = $this->_sections['name']['index'] - $this->_sections['name']['step'];
$this->_sections['name']['index_next'] = $this->_sections['name']['index'] + $this->_sections['name']['step'];
$this->_sections['name']['first']      = ($this->_sections['name']['iteration'] == 1);
$this->_sections['name']['last']       = ($this->_sections['name']['iteration'] == $this->_sections['name']['total']);
?>
    <div id ='<?php echo $this->_tpl_vars['arrTabs'][$this->_sections['name']['index']]; ?>
'>
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
            <?php $_from = $this->_tpl_vars['form']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <?php if (( $this->_tpl_vars['tab'] == 'no' ) || ( $this->_tpl_vars['item']['tab'] == $this->_tpl_vars['arrTabs'][$this->_sections['name']['index']] )): ?>
                    <tr <?php if ($this->_tpl_vars['item']['type'] == 'hidden'): ?>style="display:none;"<?php endif; ?>>
                        <th>
                            <?php echo $this->_tpl_vars['item']['label']; ?>

                        </th>
                        <td>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_field.tpl", 'smarty_include_vars' => array('field' => $this->_tpl_vars['item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['tab'] == 'yes'): ?>
    </div>
</div>
<?php endif; ?>

    
<table border=0 id="form_table_footer">
    <tr>
        <td width=100% style="padding: 10px 10px 10px 10px;" align=center>
        <div id="button_area">
            <input id="save_button" style="padding: 10px 10px 10px 10px" type="submit" value="<?php if ($this->_tpl_vars['form']['id'] == ""): ?><?php echo smarty_function_label(array('get' => 'LABEL_ADD'), $this);?>
<?php else: ?><?php echo smarty_function_label(array('get' => 'LABEL_SAVE'), $this);?>
<?php endif; ?>" >
            <input id="cancel_button" style="padding: 10px 10px 10px 10px" type="button" value="<?php echo smarty_function_label(array('get' => 'LABEL_CANCEL'), $this);?>
" onclick="javascript:document.location='index.php?module=<?php echo $this->_tpl_vars['return_module']; ?>
&action=<?php echo $this->_tpl_vars['return_action']; ?>
'">&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        </td>
    </tr>
</table>

<?php echo '
 <script>
    $(document).ready(function(){
        $("#'; ?>
<?php echo $this->_tpl_vars['form_name']; ?>
<?php echo '").validationEngine();
       });
    </script>
'; ?>


</form>