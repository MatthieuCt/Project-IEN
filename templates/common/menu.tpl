<ul id="top-menu" class="solidblockmenu">
    {foreach from=$menu item=item1 key=key1 name="loop1"}
        <li id="menu-{$item1.page_id}">
            <a href="/index.php?module={$item1.module}&amp;action={$item1.action}&amp;page_id={$item1.page_id}">
                <span>{$item1.label}</span>
            </a>
        </li>
    {/foreach}
</ul>

{foreach from=$submenu item=item2 key=key2 name="loop2"}
    <div id="submenu-{$key2}" class="dropmenudiv" style="display:none;">
        <ul>
            {foreach from=$submenu[$key2] item=item3 key=key3 name="loop3"}
                <li>
                    <a href="/index.php?module={$item3.module}&amp;action={$item3.action}&amp;page_id={$item3.page_id}">
                        <span>{$item3.label}</span>
                    </a>
                </li>
            {/foreach}
        </ul>
    </div>	
{/foreach}

<br style="clear: left" />