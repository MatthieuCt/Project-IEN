<?php /* Smarty version 2.6.22, created on 2012-07-10 23:57:54
         compiled from common/form_field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/form_field.tpl', 25, false),)), $this); ?>





<?php if ($this->_tpl_vars['field']['validate'] != ""): ?>
    <?php $this->assign('validate', $this->_tpl_vars['field']['validate']); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['field']['validate'] == 'notempty'): ?>
    <?php $this->assign('validate', "validate[required]"); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['field']['validate'] == 'empty' || $this->_tpl_vars['field']['validate'] == ""): ?>
    <?php $this->assign('validate', ""); ?>
<?php endif; ?>


<?php if ($this->_tpl_vars['field']['type'] == 'readonly' || $this->_tpl_vars['field']['type'] == 'showonly'): ?>
    <?php if ($this->_tpl_vars['field']['value'] != ""): ?><?php echo $this->_tpl_vars['field']['value']; ?>

    <?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

    <?php endif; ?>
    <?php if ($this->_tpl_vars['field']['type'] == 'readonly'): ?>
    <input id="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        class="form_table_inputtext <?php echo $this->_tpl_vars['validate']; ?>
" type=hidden
        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        <?php echo $this->_tpl_vars['field']['params']; ?>

    ><?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['field']['type'] == 'text' || $this->_tpl_vars['field']['type'] == 'number' || $this->_tpl_vars['field']['type'] == 'numeric' || $this->_tpl_vars['field']['type'] == 'hidden'): ?>
    <input id="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        class="form_table_inputtext <?php echo $this->_tpl_vars['validate']; ?>
"
        <?php if ($this->_tpl_vars['field']['hidden'] == 1 || $this->_tpl_vars['field']['type'] == 'hidden'): ?>
            type=hidden
        <?php else: ?>
            type=text
        <?php endif; ?>
        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        <?php echo $this->_tpl_vars['field']['params']; ?>

    >
<?php endif; ?>

    <?php if ($this->_tpl_vars['field']['type'] == 'pass' || $this->_tpl_vars['field']['type'] == 'password'): ?>
    <input id="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        class="form_table_inputtext <?php echo $this->_tpl_vars['validate']; ?>
"
        type=password

        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        value=""
        <?php echo $this->_tpl_vars['field']['params']; ?>

    >                       
<?php endif; ?>




<?php if ($this->_tpl_vars['field']['type'] == 'combo'): ?>
    <select id="<?php echo $this->_tpl_vars['field']['name']; ?>
" class="<?php echo $this->_tpl_vars['validate']; ?>
"
        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        <?php echo $this->_tpl_vars['field']['params']; ?>

    >
    <?php echo $this->_tpl_vars['field']['combovalues']; ?>

    
    </select>
    <?php if ($this->_tpl_vars['field']['default'] != ""): ?>
        <?php echo '
        <script type="text/javascript">
            $("#'; ?>
<?php echo $this->_tpl_vars['field']['name']; ?>
<?php echo ' option").each(function()
            {
                // add $(this).val() to your list
                if( $(this).val() == '; ?>
<?php if (is_numeric ( $this->_tpl_vars['smartyVar'] )): ?><?php echo $this->_tpl_vars['field']['default']; ?>
<?php else: ?>'<?php echo $this->_tpl_vars['field']['default']; ?>
'<?php endif; ?><?php echo ' ){
                    $(this).attr("selected",true);
                }
            });
        </script>
        '; ?>

    <?php endif; ?>

<?php endif; ?>


<?php if ($this->_tpl_vars['field']['type'] == 'textarea' || $this->_tpl_vars['field']['type'] == 'tinymce'): ?>
    <textarea id="<?php echo $this->_tpl_vars['field']['name']; ?>
"
                <?php if ($this->_tpl_vars['field']['hidden'] == 1): ?>
            type=hidden
        <?php else: ?>
            type=text
        <?php endif; ?>
        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        rows="6"   cols="30"     <?php echo $this->_tpl_vars['field']['params']; ?>

    ><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
    <?php if ($this->_tpl_vars['field']['type'] == 'tinymce'): ?>
        <?php echo '
            <script type="text/javascript" src="/libs/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
            <script type="text/javascript">
            tinyMCE.init({
                    // General options
                    mode : "textareas",
                    theme : "advanced",
                    plugins : "inlinepopups,advimage,advlink,media,contextmenu,paste,xhtmlxtras,table,emotions,iespell",
                    languages : "pl",
                    theme_advanced_buttons1_add_before : "newdocument,separator",
                    theme_advanced_buttons1_add : "fontselect,fontsizeselect",
                    theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
                    theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,media",
                    theme_advanced_buttons3 : "tablecontrols,separator,hr,removeformat,visualaid,separator,sub,sup,separator,charmap,emotions,iespell",
                    theme_advanced_toolbar_location : "top",
                    theme_advanced_toolbar_align : "left",
                    extended_valid_elements : "hr[class|width|size|noshade]",
                    file_browser_callback : "ajaxfilemanager"

            });

            function ajaxfilemanager(field_name, url, type, win) {
                var ajaxfilemanagerurl = "../../../../libs/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
                switch (type) {
                        case "image":
                                break;
                        case "media":
                                break;
                        case "flash": 
                                break;
                        case "file":
                                break;
                        default:
                                return false;
                }
                tinyMCE.activeEditor.windowManager.open({
                    url: ajaxfilemanagerurl,
                    width: 782,
                    height: 440,
                    inline : "yes",
                    close_previous : "no"
                    },{
                    window : win,
                    input : field_name
                });

            }
            </script>

        '; ?>

    <?php endif; ?>
<?php endif; ?>



<?php if ($this->_tpl_vars['field']['type'] == 'date'): ?>
    <input id="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        class="form_table_inputtext <?php echo $this->_tpl_vars['validate']; ?>
"
        type=text
        name="<?php echo $this->_tpl_vars['field']['name']; ?>
"
        value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        readonly
        <?php echo $this->_tpl_vars['field']['params']; ?>

    ><a href="javascript:void(0);" onclick="fPopCalendar('<?php echo $this->_tpl_vars['field']['name']; ?>
')" ><img src="/libs/cwcalendar/calendar.png" alt="Pokaż kalendarz" /></a>
<?php endif; ?>


<?php if ($this->_tpl_vars['field']['type'] == 'files'): ?>
<?php $this->assign('fieldDefault', $this->_tpl_vars['field']['default']); ?>
<input id="<?php echo $this->_tpl_vars['field']['name']; ?>
" 
class="form_table_inputtext <?php echo $this->_tpl_vars['validate']; ?>
" type=hidden
name="<?php echo $this->_tpl_vars['field']['name']; ?>
" 
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" 
<?php echo $this->_tpl_vars['field']['params']; ?>
 />

    <?php 
        require_once 'CFiles.php';
        $myfiles = new CFiles();
        $files = $myfiles ->getFiles($this->get_template_vars('fieldDefault'));
        echo '<div id="filesLink">';
        foreach($files as $filehash=> $file){
            echo '<label class="download-file"><a href="../../download.php?file_id='.$file['id'].'">'.$file['file_label'].'</a></label>';
            echo '<span class="delete-file">';
            echo "<a href='#' onclick='deleteFile(\"".$file['file_name']."\",\"".$file['file_extension']."\");'>Delete</a>";
            echo '</span>';
            echo '<br style="clear:both">';
        }
        echo '</div>';
     ?>

<input type="file" name="file_upload" id="file_upload" />

<?php echo '
<script>
$(function() {
    $(\'#file_upload\').uploadify({
        \'method\' : \'post\',
        \'formData\' : { \'page_id\' : '; ?>
<?php echo $_GET['page_id']; ?>
<?php echo ',
                        \'user_id\' :'; ?>
<?php echo $_SESSION['S_UserID']; ?>
<?php echo '
                    },
        \'swf\'      : \'/libs/uploadify/uploadify.swf\',
        \'uploader\' : \'/libs/uploadify/uploadify.php\',
        \'cancelImg\' : \'/libs/uploadify/uploadify-cancel.png\',
        \'auto\'      : true,
        \'removeCompleted\' : false,
        \'onUploadStart\' : function(file) {
            alert(\'Starting to upload \' + file.name);
            var hash_files = $(\'#'; ?>
<?php echo $this->_tpl_vars['field']['name']; ?>
<?php echo '\').val();
            $("#file_upload").uploadify("settings", "formData",{\'hash_code\' : hash_files } )
        },
        \'onUploadSuccess\' : function(file, data, response) {
            alert(\'The file \' + file.name + \' was successfully uploaded with a response of \' + response + \':\' + data);
            $(\'#'; ?>
<?php echo $this->_tpl_vars['field']['name']; ?>
<?php echo '\').val(data);
            var chaine=data;
            var tab = chaine.split(" ; ");
            $("#filesLink").append(tab[1]);
            
        }
    });
});
</script>
'; ?>


<?php echo '
<script  type=\'text/javascript\'>
    function deleteFile(fileref,fileExtension){
        $.ajax({ 
            type: "POST", 
            url: "../../modules/editor/delete.php", 
            data: {
                    \'fileref\' : fileref,
                    \'fileExtension\' : fileExtension
            },
            success: function(msg){ } 
        });
    }
</script>
'; ?>

<?php endif; ?>