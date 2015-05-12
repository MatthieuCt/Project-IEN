
<form enctype="multipart/form-data" name="{$form_name}" id="{$form_name}" 
action="index.php?module={$current_module}&action={$form.form_save|replace:".php":""}" method="POST">


{if !isset($smarty.get.return_module)}
    <input type=hidden name="return_module" value="{$form.return_module}" />
    {assign var="return_module" value=$form.return_module}
{else}
    <input type=hidden name="return_module" value="{$smarty.get.return_module}" />
    {assign var="return_module" value=$smarty.get.return_module}
{/if}
{if !isset($smarty.get.return_action)}
    <input type=hidden name="return_action" value="{$form.return_action}" />
    {assign var="return_action" value=$form.return_action}
{else}
    <input type=hidden name="return_action" value="{$smarty.get.return_action}" />
    {assign var="return_action" value=$smarty.get.return_action}
{/if}


{foreach from=$smarty.get item=item key=key}
    {if $key ne 'return_module' and $key ne 'return_action' and $key ne 'id' and $key ne 'module' and $key ne 'action' and $key ne 'page_id'}
        <input type=hidden name="ext_{$key}" value="{$item}" />
    {/if}
{/foreach}
 
<input type=hidden name="id" value="{$form.id}">
<input type=hidden name="current_module" value="{$current_module}" />
<input type=hidden name="current_action" value="{$current_action}" />

{* We suppose that we have all $form.fields.tab filled, and check if it's right, if not, tab value goes to "no"*}
{assign var="tab" value="yes"}
{assign var="lasttab" value=""}
{foreach from=$form.fields item=item}
    {if $item.tab ne ""}
        {if $lasttab ne $item.tab}
            {assign var="lasttab" value=$item.tab} 
            {array var='arrTabs' value=$item.tab} 
        {/if}
    {else}
        {assign var="tab" value="no"}
    {/if} 
{/foreach}

{* If array of tab's name is empty or we don't want to show tab, need to create one for the {section} below*}
{if ($arrTabs|@count == 0) or ($tab eq "no")}{php}$this->assign('arrTabs',array("Content"));{/php}{/if}

{if $tab eq "yes"}
<div id="tabs">
    <ul class="nav">
        {section name="name" loop=$arrTabs}
            <li id ='tab-{$arrTabs[name]}'><a href='#{$arrTabs[name]}'>{$arrTabs[name]}</a></li>
        {/section}
    </ul>
    <div class="list-wrap">
{/if}
{section name="name" loop=$arrTabs}
    <div id ='{$arrTabs[name]}'>
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
            {foreach from=$form.fields item=item}
                {if ($tab eq "no") or ($item.tab eq $arrTabs[name])}
                    <tr {if $item.type eq 'hidden'}style="display:none;"{/if}>
                        <th>
                            {$item.label}
                        </th>
                        <td>
                            {include file="common/form_field.tpl" field=$item}
                        </td>
                    </tr>
                {/if}
            {/foreach}
        </table>
    </div>
{/section}
{if $tab eq "yes"}
    </div>
</div>
{/if}

    
<table border=0 id="form_table_footer">
    <tr>
        <td width=100% style="padding: 10px 10px 10px 10px;" align=center>
        <div id="button_area">
            <input id="save_button" style="padding: 10px 10px 10px 10px" type="submit" value="{if $form.id == ""}{label get="LABEL_ADD"}{else}{label get="LABEL_SAVE"}{/if}" >
            <input id="cancel_button" style="padding: 10px 10px 10px 10px" type="button" value="{label get="LABEL_CANCEL"}" onclick="javascript:document.location='index.php?module={$return_module}&action={$return_action}'">&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        </td>
    </tr>
</table>

{literal}
 <script>
    $(document).ready(function(){
        $("#{/literal}{$form_name}{literal}").validationEngine();
       });
    </script>
{/literal}

</form>
