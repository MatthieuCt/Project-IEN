<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	
	<meta name="language" content="pl" />
        
        {if isset($smarty.get.page_id)}
            {php}
                    require_once 'CmsPage.php';
                    $page = new CmsPage();
                    $data_meta = $page->getMeta($_GET['page_id']);
                    
                    echo "<title>".$data_meta['META_TITLE']."</title>";
                    echo "<meta name='description' content='".$data_meta['META_DESCRIPTION']."'>";
                    echo "<meta name='keywords' content='".$data_meta['META_KEYWORDS']."'>";
            {/php}
        {/if}


	{$JSScripts}
	
	{$Csses}

</head>
<body onload="{$OnLoad}">
{$Content|default:"Brak tresci strony"}
</body>
</html>