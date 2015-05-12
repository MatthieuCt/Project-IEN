
{if $smarty.session.S_GroupID > 0}

<div style="text-align: center; min-width: 100px; padding: 0; margin: 0;  ">
{if isset($page_edit)}
<a 
    {if $page_id!=""}
        title="{label get="LABEL_EDIT_PAGE"|default:"Edit content"}" 
    {else}
        title="{label get="LABEL_CREATE_PAGE"|default:"Create content"}"
    {/if}
    href="/index.php?module=editor&amp;action=page&amp;page_id={$page_id}&amp;return_module={$current_module}&amp;return_action=list{$params}">
    <img 
        {if $page_id!=""}
            src="/images/page-edit.png"
        {else}
            src="/images/page-new.png"
        {/if} border=0
        {if $page_id!=""}
            alt="{label get="LABEL_EDIT_PAGE"|default:"Edit content"}" 
        {else}
            alt="{label get="LABEL_CREATE_PAGE"|default:"Create content"}"
        {/if}/>
</a>
&nbsp;&nbsp;
{/if}
{if $enable==1}
<a title="{label get="LABEL_ENABLE"}" href="javascript:confirm_action('', '{$current_module}', '{$prefix}enable{$postfix}','{$id}')"><img src="/images/enable.png" border=0 alt="{label get="LABEL_ENABLE"}" /></a>
&nbsp;&nbsp;
{/if}
{if $disable==1}
<a title="{label get="LABEL_DISABLE"}" href="javascript:confirm_action('', '{$current_module}', '{$prefix}disable{$postfix}','{$id}')"><img src="/images/disable.png" border=0 alt="{label get="LABEL_DISABLE"}" /></a>
&nbsp;&nbsp;
{/if}
{if $nodelete!=1}
<a title="{label get="LABEL_DELETE"}" href="javascript:confirm_action('{label get="LABEL_DELETE_CONFIRM"}', '{$current_module}', '{$prefix}delete{$postfix}','{$id}')"><img src="/images/delete.png" border=0 alt="{label get="LABEL_DELETE"}" /></a>
{/if}
&nbsp;&nbsp;
{if $noedit!=1}
<a title="{label get="LABEL_EDIT"}" href="javascript:confirm_action('', '{$current_module}', '{$prefix}edit{$postfix}','{$id}')"><img src="/images/edit.png" border=0 alt="{label get="LABEL_EDIT"}" /></a>
{/if}
{if isset($print)}
<img style="cursor: pointer" src="/images/printer.png" border=0 onclick="javascript:document.location='print.php?module={$module}&action={$action}&fid={$id}&id={$zid}&return_module={$retmod}&return_action={$retact}'">
{/if}
{if isset($custom)}
{$custom}
{/if}
</div>
{/if}