<?php

/**

 *  CmsPage.php - class for collect page from db.

 * 

 *  @author Rémy LOGIE 

 *  @version SVN: $Id$

 *  @license PRIVATE

 */
require_once 'common/database.php';

class CmsPage {

    private $page_id;
    private $page;
   

    function __construct() {
        
        

    }

    /**
      36
     * Method to get page content by Id of page
      37
     * @param type $page_id
      38
     * @return type String (content of page)
      39
     */
    public function getPageById($page_id) {
        
        if($_GET['token'] != ""){
            return $_SESSION[$_GET['token']];            
        }
            $this->page_id = $page_id;

            $data = get_row("select * from page where id=" . $this->page_id);

            $this->page = $data;
            $this->page_type = $data['page_type'];
            
            
            $ret=array();
            $ret['page_content']=$data['page_content'];
            $this->UpPageStat();
            $this->saveVisitStat();
            return $ret['page_content'];
        
    }

    /**
      48
     * Method to get page_type for selected page
      49
     * @return type string

     */
    public function getPageType() {

        if ($this->page_id == "") {

            return '';
        } else {

            return $this->page['page_type'];
        }
    }

    /**

     * Porbanie page

     * @param type $page_type (page|submenu)

     */
    public function getContent($page_type = 'page') {

        $ret = array();

        $ret = $this->page;

        return $ret;
    }
    
    
    public function getMeta($page_id){
        
            $this->page_id = $page_id;

            $data = get_row("select META_TITLE,META_DESCRIPTION,META_KEYWORDS from page where id=:id",array(":id" => $this->page_id));

            return $data;
        
    }

    private function saveVisitStat(){
	  global $dbh;
	  include_once( 'CVisitorInfo.php' );
	 
            
	  if($this -> page_id != ''){
    	$info = new CVisitorInfo();
           $sql = "INSERT INTO page_views(
//            	  id, user_ip, page_id,created_user_id,modified_dt,modified_user_id)
//      			VALUES (?, ?, ?,1, 0000-00-00 00:00:00, 1);";
//                
//  		$stmt = $dbh -> prepare($sql);
//                $stmt -> bindParam(1,  $this ->id, PDO::PARAM_INT);
//                $stmt -> bindParam(2, $info->ip, PDO::PARAM_STR);
//                $stmt -> bindParam(3, $this -> page_id , PDO::PARAM_INT);
//                $stmt -> execute();
//                
//              
                $sql = "INSERT INTO page_views(
            	  user_ip, page_id,created_user_id,modified_dt,modified_user_id)
      			VALUES (:user_ip, :page_id,1, '0000-00-00 00:00:00', 1);";
                
  		insert($sql,array(':user_ip'=> $info->ip
                    ,':page_id'=> $this->page_id));
                
             	  }  
             
  }

  
 
        function UpPageStat(){
            $now = get_row("select DATE(current_timestamp) as dateNow");
            $date = get_row("select MAX(DATE(p.created_dt)) as datePage from page_views p");
            
            if ($now['dateNow'] == $date['datePage']) {
                
                $req = get_rows("select count(page_id) as nb, page_id from page_views, page WHERE page_id=page.id and page.page_type='page_article' GROUP BY page_id");
                $nb=array();
                if($req!=NULL){
                foreach($req as $row){
                    $nb[$row['page_id']]=$row['nb'];
                }
                }
                $sql_update = "UPDATE page_statistic set nbviews =:nb + nbviews WHERE page_id =:page_id";
                $sql_insert = "INSERT INTO page_statistic (page_id,nbviews) VALUES (:page_id,:nb)";
                                
                $sql_in_stat="SELECT id FROM page_statistic WHERE page_id=:page_id";
                
                foreach($nb as $k=>$v){
                    $is_in_stat=  get_row($sql_in_stat,array(":page_id"=>$k));
                    if($is_in_stat!=NULL){
                        update($sql_update,array(":nb"=>$v,":page_id"=>$k));
                    }else{
                        insert($sql_insert,array(":nb"=>$v,":page_id"=>$k));
                    }
                }

                $delete = "DELETE FROM page_views";
                delete($delete);
            } else {
           
            }
        }
    function getMenu_name($pageid){
      $this->page_id=$pageid;
      
      $data = get_row("select menu.menu_name from menu where lang_id=" . $_SESSION['S_LangID']." and menu.page_id= ". $this->page_id );
      echo $data;
      return $data;
  }
  
  function get_fil_ariane($array_fil) {
		
		foreach($array_fil as $url => $lien) {
			$fil .= ' > ';
			if($url == 'final') {
				$fil .= $lien;
				break;
			}
			$fil .= '<a href="' . $url . '">' . $lien . '</a>';
		}
		echo $fil;
	}

        
}
  /* function getDate(){
       $data = get_row("select DATE(current_timestamp)");
      return $data;
   }
   
   function getDateArticle(){
        $data = get_rows("select MAX(DATE(p.created_dt)) from page_views p");
     
      return $data;
   }*/
   



?>
