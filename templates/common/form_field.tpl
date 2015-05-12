

{* wyswietlanie odpowiedniego pola *}
{* zmienne na wejsciu WYMAGANE pod zmienna [FIELD]*}
{* array := name , label , type , validate *}



{* VALIDACJA *}
{if $field.validate != ""  }
    {assign var="validate" value=$field.validate }
{/if}
{if $field.validate =="notempty"}
    {assign var="validate" value="validate[required]"}
{/if}
{if $field.validate =="empty" || $field.validate ==""  }
    {assign var="validate" value=""}
{/if}
{* END VALIDACJA: USE $validate *}


{* READONLY *}
{if $field.type=="readonly" || $field.type=="showonly"}
    {if $field.value != ""}{$field.value}
    {else}{$field.default|escape}
    {/if}
    {if $field.type=="readonly"}
    <input id="{$field.name}"
        class="form_table_inputtext {$validate}" type=hidden
        name="{$field.name}"
        value="{$field.default|escape}"
        {$field.params}
    >{/if}
{/if}

{* INPUT *}
{if $field.type=="text" || $field.type=="number" || $field.type=="numeric" || $field.type=="hidden" }
    <input id="{$field.name}"
        class="form_table_inputtext {$validate}"
        {if $field.hidden==1 || $field.type=="hidden"}
            type=hidden
        {else}
            type=text
        {/if}
        name="{$field.name}"
        value="{$field.default|escape}"
        {$field.params}
    >
{/if}

{* PASSWORD *}
    {if $field.type=="pass" or $field.type=="password"}
    <input id="{$field.name}"
        class="form_table_inputtext {$validate}"
        type=password

        name="{$field.name}"
        value=""
        {$field.params}
    >                       
{/if}




{* COMBOBOX *}
{if $field.type=="combo"}
    <select id="{$field.name}" class="{$validate}"
        name="{$field.name}"
        {$field.params}
    >
    {$field.combovalues}
    
    </select>
    {if $field.default!=""}
        {literal}
        <script type="text/javascript">
            $("#{/literal}{$field.name}{literal} option").each(function()
            {
                // add $(this).val() to your list
                if( $(this).val() == {/literal}{if is_numeric($smartyVar)}{$field.default}{else}'{$field.default}'{/if}{literal} ){
                    $(this).attr("selected",true);
                }
            });
        </script>
        {/literal}
    {/if}

{/if}


{* TEXTAREA | TINYMCE | TINYMCEsmall*}
{if $field.type=="textarea" || $field.type=="tinymce"}
    <textarea id="{$field.name}"
        {*class="{$validate}"*}
        {if $field.hidden==1}
            type=hidden
        {else}
            type=text
        {/if}
        name="{$field.name}"
        rows="6"   cols="30"     {$field.params}
    >{$field.default|escape}</textarea>
    {if $field.type=="tinymce"}
        {literal}
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

        {/literal}
    {/if}
{/if}



{* DATE *}
{if $field.type=="date"}
    <input id="{$field.name}"
        class="form_table_inputtext {$validate}"
        type=text
        name="{$field.name}"
        value="{$field.default|escape}"
        readonly
        {$field.params}
    ><a href="javascript:void(0);" onclick="fPopCalendar('{$field.name}')" ><img src="/libs/cwcalendar/calendar.png" alt="Pokaż kalendarz" /></a>
{/if}


{* FILES*}
{if $field.type=="files"}
{assign var='fieldDefault' value=$field.default}
<input id="{$field.name}" 
class="form_table_inputtext {$validate}" type=hidden
name="{$field.name}" 
value="{$field.default|escape}" 
{$field.params} />

    {php}
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
    {/php}

<input type="file" name="file_upload" id="file_upload" />

{literal}
<script>
$(function() {
    $('#file_upload').uploadify({
        'method' : 'post',
        'formData' : { 'page_id' : {/literal}{$smarty.get.page_id}{literal},
                        'user_id' :{/literal}{$smarty.session.S_UserID}{literal}
                    },
        'swf'      : '/libs/uploadify/uploadify.swf',
        'uploader' : '/libs/uploadify/uploadify.php',
        'cancelImg' : '/libs/uploadify/uploadify-cancel.png',
        'auto'      : true,
        'removeCompleted' : false,
        'onUploadStart' : function(file) {
            alert('Starting to upload ' + file.name);
            var hash_files = $('#{/literal}{$field.name}{literal}').val();
            $("#file_upload").uploadify("settings", "formData",{'hash_code' : hash_files } )
        },
        'onUploadSuccess' : function(file, data, response) {
            alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            $('#{/literal}{$field.name}{literal}').val(data);
            var chaine=data;
            var tab = chaine.split(" ; ");
            $("#filesLink").append(tab[1]);
            
        }
    });
});
</script>
{/literal}

{literal}
<script  type='text/javascript'>
    function deleteFile(fileref,fileExtension){
        $.ajax({ 
            type: "POST", 
            url: "../../modules/editor/delete.php", 
            data: {
                    'fileref' : fileref,
                    'fileExtension' : fileExtension
            },
            success: function(msg){ } 
        });
    }
</script>
{/literal}
{/if}