<div class="span-6 left-column first">

		 
			<div class="news-wrapper">
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<h3><img src="images/icons/script.png" alt="aktualności" />&nbsp;Aktualności</h3>
				  {$box_article_new|default:$TXT_NOARTICLES}
				<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			</div>
		</div>
		 
		<div class="span-11 center-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<div id="content">
			 {$TXT_ERROR_NOPAGE}
			 <br /><br />
			 <div style="float:right">
			   {$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}
			 </div>
			</div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>
		<div class="span-6 last right-column">
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			
      
      
      <div class="files-wrapper">
        <h3><img alt="Pliki" src="images/icons/attachment_icon.png" />&nbsp;{$TXT_FILESMOSTDOWNLOAD|default:"Pliki najczęściej pobierane"}</h3>
        {$box_file_most_downloaded|default:$TXT_NOFILES}
      </div>
			<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		</div>