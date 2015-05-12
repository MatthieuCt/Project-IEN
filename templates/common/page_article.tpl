{include file="common/filsdariane.tpl"}
<div class="span-16 left-column first">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div class="noprint" 
          style="float: right; background-color: #f3f3f3; border: 1px solid rgb(188, 210, 230); 
                  padding: 5px; margin: -10px 0px 10px 10px;">
        <a title="Drukuj" href="javascript:window.print();">
          <img alt="print page" style="vertical-align: middle; margin-bottom: 2px;" src="http://www2.ien.pw.edu.pl/images/print.png" />Drukuj  
        </a><br />
      </div>
                        
        <div id="content">
             
            {if $smarty.get.c eq 'employee'}
                <ul class="NoBullet">
                {if $user_list eq ""}
                    {label get="TXT_EMPTY"|default:"Brak wyników."}
                {else}
                {foreach from=$user_list item=item}
                    
                    <li>
                    <div>
                <h5>{$item.title} {$item.user_name}</h5>
                <strong>{$item.function_name}</strong></br>
                {$item.user_email}<br/>
                {$item.phone}<br/>
                </div><br/>
                </li>
                {/foreach}
                {/if}
                </ul>
             {elseif $smarty.get.c eq 'article'}
                 <div class="news-wrapper">
                     {foreach from=$article_nb item=item name=loop}
                        {if (!isset($smarty.get.nb) and $smarty.foreach.loop.iteration eq "1") or $smarty.get.nb eq $item}
                            [{$item}]
                        {else}    
                            <a href="/index.php?module=page&amp;action=show&amp;c=article&amp;page_type=page_article&amp;nb={$item}">{$item}</a>
                        {/if}
                     {/foreach}
                  <ul>
                      {foreach from=$article_list item=item}
                          <li>
                        <div class="news-content">
                         {$item.article_name} <br/>
                         </div>
                       <div class="news-more"><br/>
                            <div class="news-date">
                                 {$item.created_dt} <br/>
                                  </div>
                            <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article">{label get="TXT_MORE"}</a>
                            </div>
                                </li>
                         {/foreach}
                          </ul>
                      </div>
               {else}
               {$page_content}
               <div class="files-wrapper">
                   <ul>
                       {foreach from=$files_article item=item name=loop}
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
                               <a href="../../download.php?file_id={$item.id}" title="{$item.file_label}">{$item.file_label}</a>
                               <br style="clear: both;">
                           </li>
                       {/foreach}
               </div>
               <br/>
               {$page_type}
            {/if}
           
            

            
        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		
</div>
<div class="span-7 last right-column noprint">
  <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      
      
      
      <div class="news-wrapper">
        <h3><img alt="Artykul" src="images/icons/script.png" />&nbsp;{label get="TXT_ARTICLELASTREAD"}</h3>
        {$box_article_lastreaded|default:$TXT_NOARTICLES}
        
        
        
        
         <div class="news-wrapper">
           
                        <ul>
                                 {foreach from=$frequently_article item=item}
                                        <li>
                                             <div class="news-content">
                                                 {$item.article_name} 
                                             </div>
                                              <div class="news-more">
                                                  <div class="news-date">
                                                     {$item.created_dt} 
                                                   </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}">{label get="TXT_MORE"}</a>
                                             </div>
                                        </li>
                  
                                 {/foreach}
                                 
                       </ul>
                       </div>
        
        
        
      </div>

      <div class="news-wrapper">
        <h3><img alt="Artykul" src="images/icons/script.png" />&nbsp;{label get="TXT_RECENTLY_ADD"}</h3>
        {$box_article_new|default:$TXT_NOARTICLES}
        
        
         <div class="news-wrapper">
           
                        <ul>
                                 {foreach from=$arr_article item=item}
                                        <li>
                                             <div class="news-content">
                                                 {$item.article_name} 
                                             </div>
                                              <div class="news-more">
                                                  <div class="news-date">
                                                     {$item.created_dt} 
                                                   </div>
                                                  <a href="/index.php?module=page&amp;action=show&amp;page_id={$item.page_id}&amp;page_type=page_article&amp;fil={$item.article_name}">{label get="TXT_MORE"}</a>
                                             </div>
                                        </li>
                  
                                 {/foreach}
                                   <li style="text-align: right">
                                     <a href="/index.php?module=page&amp;action=show&amp;c=article" >{label get="TXT_ARTICLE_ALL"}</a>
                                 </li>
                       </ul>
                       </div>
      </div>
      

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>