<div class="result-extra">           		
  <h3>Popularne sny</h3> 
    <ul>           			
      
    {foreach from=$keyword_oftenshow item=item2 key=key2 name="loop2"}
	    <li>
        {*<a href="index.php?c=word&amp;q={$item2.word|escape:'url'}">{$item2.word}</a>*}
        <a href="{$item2.word|escape:'nopolish'|prepare_url},{$item2.id}.html" title="Sen zawierający element: {$item2.word}">{$item2.word}</a>
      </li> 
    {/foreach}           		
    </ul> 
</div>  
 
  
<div class="result-extra0">             		
  <h3>Cytat senny</h3>         
   
  {$cytat_box}  
  <br /> 	<br /> 		            	
</div>

<div class="result-extra">           		
  <h3>Warto wiedzieć</h3> 
    {$box_article_lastreaded}
</div>  

