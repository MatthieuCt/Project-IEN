<?php

/**

 *  CmsPage.php - class for collect page from db.

 * 

 *  @author Rémy LOGIE 

 *  @version SVN: $Id$

 *  @license PRIVATE

 */
require_once 'common/database.php';

class CmsArticle {

    private $page_id;
    private $article;
    private $nbArticle=2;

    function __construct() {
        $this->page_id = $page_id;

        $data = get_rows("select id,article_name from article where lang_id=" . $_SESSION['S_LangID']);
        
        $tmp=array();
        $this->article=array();
       
      
    }
    
    public function getArticleById($page_id) {

        $this->page_id = $page_id;

        $data = get_row("select * from article where lang_id=" . $_SESSION['S_LangID']);
        
        $this->article=array();
        $this->article=$data;
       
       
        return $data['article_name'];
    }

        public function getArticlesListHome() {

        $data = get_rows("select article.page_id,article.article_name, DATE(article.created_dt) AS created_dt from article where lang_id=" . $_SESSION['S_LangID']." ORDER BY created_dt DESC LIMIT 2");
        

        return $data;
    }
   
      public function getArticlesLastmodified(){
              
       $data = get_rows(" (select DATE(article.modified_dt) as md , article.article_name from article where lang_id=" . $_SESSION['S_LangID']." ORDER BY modified_dt DESC)
                            UNION
                            (select DATE(article.created_dt), article.article_name from article where lang_id=" . $_SESSION['S_LangID']." ORDER BY created_dt) ORDER BY md DESC LIMIT 2");
        return $data;
    }
    
       public function getArticlesLastViews(){
           $data = get_rows("select a.article_name, a.created_dt from page_views pw, page p,article a where a.page_id=p.id and pw.page_id=p.id and p.lang_id=" . $_SESSION['S_LangID']." ORDER BY pw.id DESC LIMIT 2");

            return $data; 
       }
    
    
    
    
     public function getArticlesListAll($nb) {
        $start = (($nb-1)*$this->nbArticle);
        $data = get_rows("select * from article where lang_id=" . $_SESSION['S_LangID']." ORDER BY created_dt DESC LIMIT ".$start.",".$this->nbArticle);
        

        return $data;
    }
    
    public function getNbArticle(){
        $data = get_row("Select COUNT(*) from article where lang_id=:id",array(":id"=>$_SESSION['S_LangID']));
        
        $ret=array();
        for($i=1;$i<=ceil($data/$this->nbArticle);$i++){
            $ret[$i]=$i;
        }
        return $ret;
    }
  
    
    public function getContent($page_type = 'article') {

        return $this->article;
    }
    
    
  
  public function getArticleFrequently(){
     
    $data = get_rows( "Select * from page_statistic p, article a where a.page_id = p.page_id AND a.lang_id=:lang_id;",array(":lang_id"=>$_SESSION['S_LangID']));   
   
    return $data;
    
  }
    
}
?>