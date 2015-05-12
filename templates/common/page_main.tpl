<div class="container">
	<div class="span-24 last top-menu top-box noprint">
	    <div class="span-20 first">
          {$arrayLabels.FRONT_TOP_LEFT}
      </div>

      <div class="span-4 last" style="text-align: center;">
          <a href="/" title="Gra Cash Flow - przepływ pieniędzy!" >
            <img src="images/gra-cashflow.png" alt="Gra CashFlow Robert Kiyosaki" style="border: 0px; width: 140px; padding-top: 3px; padding-right: 3px; padding-left: 3px;" />
          </a>
      </div>
	
	</div>
	<div class="span-24 last main-menu noprint">

    
            
		<div class="span-24 first">
  		<ul id="top-menu" class="solidblockmenu">
  		{foreach from=$arrMenu item=item1 key=key1 name="loop1"}
  				<li id="menu-{$key1}">
  				  <a {if $smarty.foreach.loop1.first}style="border-left:none"{/if}
  				  
  				  {if $item1.menu_link != ""}
  				    href="{$item1.menu_link|prepare_url}" title="{$item1.menu_name}"
  				  {else}
  				    href="{$item1.menu_name|prepare_url}-strona-{$item1.page_id|escape:'url'}.html" title="{$item1.menu_name}"
  				  {/if}
  				  ><span>{$item1.menu_name}</span></a>
  				</li>
  		{/foreach}
  		</ul>
  		
  		
  		{foreach from=$arrSubMenu item=item1 key=key1 name="loop2"}
    		<div id="submenu-{$key1}" class="dropmenudiv" style="display: none;">
    		  <ul>
    		  {foreach from=$arrSubMenu[$key1] item=item2 key=key2 name="loop2"}
    		    <li>
                        <a
                            {if $item2.menu_link != ""}
  				      href="{$item2.menu_link|prepare_url}" title="{$item2.menu_name}"
  				    {else}
  				      href="{$item2.menu_name|prepare_url}-strona-{$item2.page_id|escape:'url'}.html" title="{$item2.menu_name}"
  				    {/if}              
                        ><span>{$item2.menu_name}</span></a>
                    </li>
    		  {/foreach}
    		  </ul>
    		</div>	
  		{/foreach}
  	</div>
    <div class="span-6 last">
       
    </div>
    
        <br style="clear: left" />
	</div>
	<div class="span-24 last main-menu-shadow noprint">
	
	
	</div>
	<div class="span-24 last main-content" style="min-height: 450px;">
		<div class="span-24 vertical-spacer last noprint"></div>
		
		
		<div id="content">

                    {$page|default:"<p>Brak treści</p>"}

                </div>
		
		
		<div class="span-24 vertical-spacer last noprint"></div>
	</div>
	
	
	{include file="common/footer.tpl"}
	  	
</div>	
