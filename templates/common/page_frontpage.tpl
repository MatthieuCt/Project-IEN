<div class="span-24 last">
    <div class="span-7 first" style="text-align: center;">
      <a href="/robert_kiyosaki.html" title="Pomyslodawca gry CashFlow 101 i 202">
        <img src="images/Robert_Kiyosaki.jpg" alt="Robert Kiyosaki "/>
      </a>
        <br /><b><a href="/robert_kiyosaki.html" title="Pomyslodawca gry CashFlow 101">Robert Kiyosaki</a></b><br />
        Pomysłodawca gry cashflow, nauczyciel.
    </div>
    <div class="span-17 last">
      {literal}
      <script type="text/javascript">
      <!--
      	$(document).ready(function(){
      		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
      	});
      // -->
      </script>
      {/literal}
      {$page}
    </div>
 
</div>
<div class="span-24 last">
  <hr />
  
  <div class="span-8 first" style="margin-right: 9px">
    {$arrayLabels.FRONT_CASHFLOW101}
  </div>
  
  
  
  <div class="span-8" style="border-left: 1px dotted #532160; border-right: 1px dotted #532160; margin-right: 9px">
  {$arrayLabels.FRONT_CASHFLOW202}
  </div>
  
  <div class="span-8 last">
  {$arrayLabels.FRONT_CASHFLOWZESTAW}
  </div>
  

    <!-- :::::::::::: Organizacja Instytutu ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="news-wrapper">
        <div>
            <h3><img src="images/icons/ien.png" alt="{label get="TXT_INSTITUTE"}" />&nbsp;{label get="TXT_INSTITUTE"}</h3>
            {label get="BOX_INSTITUTE"}
        </div>		
    <div>	
			 
    <h3><img src="images/icons/organ.gif" alt="{label get="TXT_ORGANIZATION"}" />&nbsp;{label get="TXT_ORGANIZATION"}</h3>
    {$page_institut}
    
    {foreach from=$page_institut item=item}
        {$item.institute_name} 
    {/foreach}
    
</div>

<div class="news-wrapper">
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <h3><img src="images/icons/search.gif" alt="Wyszukiwarka" />&nbsp;{label get="TXT_SEARCH"}</h3>

    <input 	type="text" name="query" 
                    onfocus="this.style.color='black'; if(this.value=='{label get="TXT_SEARCH_INPUT}')this.value='';" 
                    onblur="{literal}if( this.value=='' ){ this.value='{/literal}{label get="TXT_SEARCH_INPUT}{literal}';this.style.color='grey';}{/literal}" 
                    value="{label get="TXT_SEARCH_INPUT}" style="color: grey;" />
    <input type="submit" value="{label get="TXT_SEARCH_BUTTON}" />

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>
</div>
					
			
		</div>
</form>		
		<div class="span-11 center-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div id="content">
			 {$pageContent}			
                        </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div class="news-wrapper">
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<h3><img src="images/icons/script.png" alt="aktualnosci" />&nbsp;{label get="TXT_MOSTVIEWS"}</h3>
				  {$box_article_new|default:$TXT_NOARTICLES}
                                  
                    {*   foreach from=$articleContent item=item}
                                    {$item} 
                                 {/foreach}
                                *}
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			</div>
                              
		</div>
		<div class="span-6 last right-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div>
        <h3><img src="images/icons/map.png" alt="plan pw" />&nbsp;{label get="TXT_PWMAPLABEL"}</h3>
  			
        {label get="BOX_PWMAP"}
			</div>
      
      
      <div class="files-wrapper">
        <h3><img id="files" alt="Pliki" src="images/icons/attachment_icon.png" />&nbsp;{label get="TXT_FILESMOSTDOWNLOAD"}</h3>
        {$box_file_most_downloaded|default:$TXT_NOFILES}
      </div>

			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>
