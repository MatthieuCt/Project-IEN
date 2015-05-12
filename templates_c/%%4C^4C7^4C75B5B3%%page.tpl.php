<?php /* Smarty version 2.6.22, created on 2012-07-02 17:51:43
         compiled from editor/page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'editor/page.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_header.tpl", 'smarty_include_vars' => array('form_title' => 'Edit page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form.tpl", 'smarty_include_vars' => array('form_name' => $this->_tpl_vars['form_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/form_extra_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
    <script type=\'text/javascript\'>
    
    $(document).ready(function(){
        
        $(\'.nav li:last-child\').after("<li><a href=\'#Preview\' onclick=\\"previewContent();\\">'; ?>
<?php echo smarty_function_label(array('get' => 'TXT_EDITOR_PREVIEW'), $this);?>
<?php echo '</a></li>");
        
        $(\'.list-wrap>div:last-child\')
            .after("<iframe id=\'Preview\' style=\\"display:none;\\" width=\\"900\\" height=\\"700\\"></iframe>");
        $(\'ul.nav>li\').first().find(\'a\').addClass(\'current\');
        $(\'div.list-wrap>div\').slice(1).addClass(\'hide\');
        });
            
   $(function() { $("#tabs").organicTabs(); });
    
    </script>    
'; ?>



<?php echo '
<script type=\'text/javascript\'>
    function previewContent(){
            var page_id = $(\'input[type="hidden"][name="id"]\').val();
            var module = "page";
            var action = $(\'#page_type option:selected\').val();
            if(action!="homepage") action="show";
            var content = tinyMCE.activeEditor.getContent(); 
            var token= Math.random();
            $.ajax({ 
                        type: "POST", 
		   	url: "../../modules/editor/content_tmp.php", 
		  	data: {
		 		token : token,
		 		content : content
	 	 	},
                            success: function(msg){ 
                                var _url = \'../../index.php?module=\'+module+\'&action=\'+action+\'&page_id=\'+page_id+\'&token=\'+token;
                                $("#Preview").attr(\'src\', _url);
                            } 
                    });

    }    
</script>    
'; ?>