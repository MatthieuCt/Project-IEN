<div id=flags>
    <ul class="top-menu-ul" style="float:left">
        {foreach from=$lang_array item=item key=key name=loop}
            <li class="flag">
                <a id="flag-{$item.id}{if $smarty.session.S_LangID eq $item.id}-selected{/if}" 
                   class="flag" href="{$smarty.server.PHP_SELF}?lang_id={$item.id}" 
                    {if $smarty.foreach.loop.first and $smarty.foreach.loop.last}style="border-left:none; border-right:none;"
                    {elseif $smarty.foreach.loop.first}style="border-left:none"
                    {elseif $smarty.foreach.loop.last}style="border-right:none" 
                    {/if}
                   ></a></li>
        {/foreach}
    </ul>
</div>