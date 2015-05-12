<form id="fsearch" action="index.php?module=page&amp;action=show&amp;c=search" method="get" >
<input type="hidden" id="lang" name="lang" value="{$smarty.session.S_LangId|default:"1"}" />
<input type="hidden" id="c" name="c" value="search" />
<div class="span-6 left-column first">

    <!-- :::::::::::: Organizacja Instytutu ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    
    <div class="news-wrapper">
        <div>
            <h3><img src="images/icons/ien.png" alt="{label get="TXT_INSTITUTE"}" />&nbsp;{label get="TXT_INSTITUTE"}</h3>
            {label get="BOX_INSTITUTE"}
            
        </div>	
            
    <div>	
        
    <h3><img src="images/icons/organ.gif" alt="{label get="TXT_ORGANIZATION"}" />&nbsp;{label get="TXT_ORGANIZATION"}</h3>
                                <ul class="units-wrapper">
                                {foreach from=$list_institute item=item key=key}
                                    <li>
                                        <a class="units-link" href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_institute&amp;fil={$item.branch_name}">
                                            
                                            <strong>
								<span style="color: rgb(128, 0, 0);">{$item.branch_name}</span>
                                            </strong>
                                        </a>
                                            </br>
                                            {label get="TXT_EMPLOYEES_LIST"}
                                            <a href="/index.php?module=page&amp;action=show&amp;c=employee&amp;unit={$key}">{$item.nbEmployee}</a>
                                   </li>
                                 {/foreach}
                                 <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=employee" >{label get="TXT_EMPLOYEES_ALL"}</a>
                                 </li>
                                </ul>
    

    </div>


<div class="news-wrapper">
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <h3><img src="images/icons/search.gif" alt="Wyszukiwarka" />&nbsp;{label get="TXT_SEARCH"}</h3>

    <input 	type="text" name="query" 
                    onfocus="this.style.color='black'; if(this.value=='{label get="TXT_SEARCH_INPUT}')this.value='';" 
                    onblur="{literal}if( this.value=='' ){ this.value='{/literal}{label get="TXT_SEARCH_INPUT}{literal}';this.style.color='grey';}{/literal}" 
                    value="{label get="TXT_SEARCH_INPUT}" style="color: grey;" />
    <input type="submit" value="{label get="TXT_SEARCH_BUTTON}"/>

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>
    </div>

    </div>

    
					
			

</form>		
    
		<div class="span-11 center-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div id="content">
                            
			 {$page_content}			
                        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="news-wrapper">
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
            <div id="tabArticle">
                
               
                <ul class="nav">
                 <li>  <img src="images/icons/script.png" alt="aktualnosci" /></li>
                <li class="nav-one"><a href="#featured" class="current">{label get="TXT_RECENTLY_ADD"}</a></li>
                <li class="nav-two"><a href="#core" class="current" class="straight-line">{label get="TXT_LASTMODIFIED"}</a></li>
                <li class="nav-three"><a href="#jquerytuts"class="current" >{label get="TXT_LASTVIEWS"}</a></li>
                
    </ul>
	       
    <div class="list-wrap">
	
		<ul id="featured">
			 <ul>
                                 {foreach from=$arr_article item=item}
                                        <li>
                                             
                                            <div class="news-more">
                                                 <div class="news-date">
                                                   <b>  {$item.created_dt} :
                                                 
                                                    <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}"> {$item.article_name}  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}">{label get="TXT_MORE"}</a>
                                             </div>
                                        </li>
                  
                                 {/foreach}
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" >{label get="TXT_ARTICLE_ALL"}</a>
                                 </li>
                       </ul>
		</ul>
		 
		 <ul id="core" class="hide">
			 <ul>
                                 {foreach from=$lastmodified_article item=item}
                                      <li>
                                            {$fil_ariane} 
                                            <div class="news-more">
                                                 <div class="news-date">
                                                   <b>  {$item.md} :
                                                 
                                                    <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}"> {$item.article_name}  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}">{label get="TXT_MORE"}</a>
                                             </div>
                                        </li>
                  
                                 {/foreach}
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" >{label get="TXT_ARTICLE_ALL"}</a>
                                 </li>
                       </ul>
		 </ul>
		 
		 <ul id="jquerytuts" class="hide">
			 <ul>
                                 {foreach from=$lastviews_article item=item}
                                       <li>
                                             
                                            <div class="news-more">
                                                 <div class="news-date">
                                                 <span>   <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}"> {$item.article_name}  </a></span>
</b>                                                </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}">{label get="TXT_MORE"}</a>
                                             </div>
                                        </li>
                  
                                 {/foreach}
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" >{label get="TXT_ARTICLE_ALL"}</a>
                                 </li>
                       </ul>
		 </ul>
		 
		 
    </div> <!-- END List Wrap -->
 
 </div> <!-- END Organic Tabs (Example One) -->
 
                   
             
                       </div>
                                
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			
                              
		</div>
		<div class="span-6 last right-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div>
        <h3><img src="images/icons/map.png" alt="plan pw" />&nbsp;{label get="TXT_PWMAPLABEL"}</h3>
  			
        {label get="BOX_PWMAP"}
			</div>
      
      
        <div class="files-wrapper">
            <h3><img id="files" alt="Pliki" src="images/icons/attachment_icon.png" />&nbsp;{label get="TXT_FILESMOSTDOWNLOAD"}</h3>
            <ul>
                {foreach from=$files_most_downloaded item=item name=loop}
                    <li>
                        <span style="float: left;">
                            <a class="file-image" href="download.php?file_id={$item.id}">
                                {if file_exists("/images/files_type/`$item.file_type`.32.gif") }
                                <img id="{$item.file_type}_{$smarty.foreach.loop.iteration}" src="/images/files_type/{$item.file_type}.32.gif" style="border:0px;" alt="{$item.file_type}">
                                {else}
                                <img id="{$item.file_type}_{$smarty.foreach.loop.iteration}" src="/images/files_type/file.32.gif" style="border:0px;">
                                {/if}
                                &nbsp;
                            </a>
                        </span>
                        <a href="download.php?file_id={$item.id}" title="{$item.file_label}">{$item.file_label}</a>
                        <br style="clear: both;">
                    </li>
                {/foreach}
        </div>

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>
{literal}
    <script type='text/javascript'>
    $(document).ready(function() {

        $("#tabArticle").organicTabs();
        
       

    });
</script>
{/literal}