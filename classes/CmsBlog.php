<?php


require_once 'common/database.php';

class CmsBlog {

    private $page_id;
    private $blog;

    function __construct() {
        $this->page_id = $page_id;

        $data = get_rows("select id,blog_name from blog where lang_id=" . $_SESSION['S_LangID']);
        
        $tmp=array();
        $this->article=array();
        //foreach($data as $row){ $tmp[$row['id']]=$row['article_name']; echo $tmp[$row['id']];}
        
      //  $this->article=$tmp;
//        foreach($this->article as $row) echo $row['article_name'];
    }      
        
        
 public function getBlogsList(){
      $data = get_row("select * from blog where lang_id=" . $_SESSION['S_LangID']);
        
        $this->article=array();
        $this->article = $data;

        return $data['blog_name'];
 }
 
    
    public function getBlogPagesList(){
        $data = get_row("select blog_name, page_id from blog where lang_id=" . $_SESSION['S_LangID']);
        
        $this->article=array();
        $this->article = $data;
        
        return $data['page_id'];
    }
    
}