<?php
require_once("CmsPage.php");
require_once("CmsEmployee.php");
require_once("CmsArticle.php");
require_once("CPageSearch.php");
require_once("CFiles.php");

$mypage = new CmsPage();
    
$data = $mypage->getPageById($_GET['page_id']);

$smarty->assign("page_content", $data);

if(isset($_GET['c']) && $_GET['c']==employee){
    $myemployee = new CmsEmployee();
    if(isset($_GET['unit']) && $_GET['unit']!=""){
        $data = $myemployee->getEmployeeList($_GET['unit']);
    }else{
        $data = $myemployee->getEmployeeList();
    }
}
$smarty->assign("user_list", $data);

if(isset($_GET['c']) && $_GET['c']==search){
    $mysearch = new CPageSearch();
    if(isset($_GET['query']) && $_GET['query']!=""){
        $data = $mysearch->searchAll($_GET['query']);
    }else{
        $data = "error data search";
    }
    $smarty->assign("keywords", $data);
    $smarty->assign("keywords2", $data[search]);
}



$myarticle = new CmsArticle();
if(isset($_GET['nb'])){
    $data = $myarticle->getArticlesListAll($_GET['nb']);
}else{
    $data = $myarticle->getArticlesListAll(1);
}
$dataNbArticle = $myarticle->getNbArticle();


$smarty->assign("article_list", $data);
$smarty->assign("article_nb",$dataNbArticle);

$myarticle2 = new CmsArticle();
$smarty->assign("arr_article", $myarticle2 ->getArticlesListHome());

$myarticle3 = new CmsArticle();
$smarty->assign("frequently_article", $myarticle3 -> getArticleFrequently());

if(isset($_GET['fil'])){
   
    $smarty->assign("fil_ariane_show", $mypage->get_fil_ariane(array('index.php' => 'accueil','final '=>$_GET['fil'])));

}else{
    
$smarty->assign("fil_ariane_show", $mypage->get_fil_ariane(array('index.php' => 'accueil','final '=>$mypage->getMenu_name($_GET['page_id']))));
}

$myfiles=new CFiles();
$smarty->assign("files_article",$myfiles->getFilesFromPage($_GET['page_id']));
?>
