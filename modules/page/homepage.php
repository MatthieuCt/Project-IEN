<?php
    require_once("common/session_validator.php");
    require_once("common/form.php");
    require_once("CmsArticle.php");
    require_once("CmsPage.php");
    require_once("CmsInstitute.php");
    require_once("CFiles.php");
   // require_once("CmsFile.php");

    
    $mypage = new CmsPage();
    
    $data = get_row('SELECT p.id FROM page p WHERE p.page_type="homepage" AND p.lang_id=:lang_id ', array(':lang_id' => $_SESSION['S_LangID']));
    $data = $mypage->getPageById($data);
    
    $smarty->assign("page_content", $data);
    
    
    $myarticle = new CmsArticle();
    $smarty->assign("arr_article", $myarticle ->getArticlesListHome());
    $smarty->assign("lastmodified_article", $myarticle ->getArticlesLastmodified());
    $smarty->assign("lastviews_article", $myarticle ->getArticlesLastViews());
    
    $myinstitute = new CmsInstitute();
    $smarty->assign("list_institute", $myinstitute ->getinstituteList());
    
    $files=new CFiles();
    $smarty->assign("files_most_downloaded",$files->getMostDownloaded());
    
//    $myfile = new CmsFile();
//    $smarty->assign("list_file", $myfile ->getFilesMostDownloaded());
    
     
   
?>
