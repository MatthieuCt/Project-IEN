
{literal}

<link rel="stylesheet" type="text/css" href="/libs/superfish/css/superfish.css" media="screen">
<script type="text/javascript" src="/libs/superfish/css/js/hoverIntent.js"></script>
<script type="text/javascript" src="/libs/superfish/css/js/superfish.js"></script>
<script type="text/javascript">

// initialise plugins
jQuery(function(){
        jQuery('ul.sf-menu').superfish();
});

</script>

{/literal}


{if $smarty.get.module ne 'page' and $smarty.session.S_GroupID > 0 }
<div class="span-24 last admin-menu noprint">
    <ul class="sf-menu">
        {foreach from=$navigation item=item1 name=loop1}
        <li>
            <a href="/index.php?module={$item1.module}&amp;action={$item1.action}">
                <span>{$item1.label}</span>
            </a>
            {if $item1.submenu}
                <ul>
                    {foreach from=$item1.submenu item=item2 name=loop2}
                        <li>
                            <a href="/index.php?module={$item2.module}&amp;action={$item2.action}">
                                <span>{$item2.label}</span>
                            </a>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </li>

        {/foreach}
    </ul>

</div>
{/if}

<br style="clear: left" />