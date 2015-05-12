<?php 

/**
*  CPageSearch.php
*  @author Andrzej Domurat (andrzej.domurat@gmail.com)
*  @version 1.0
*  @license PRIVATE
*/


class CPageSearch{
        private $string_search;
	private $lang;
	private $arrPages;
        public $keywords;
        
        public function __construct(/*$_str, $lang_id*/){
		/*$this -> string_search = $_str;
		$this -> lang = $lang_id;
		$arrPages = array();
		$this-> arrPages = $this -> searchPage();*/
	}
//	private function searchPage(){
//		global $dbh;
//		$sql = "SELECT menu_id FROM t_menu WHERE lower( menu_name ) ilike lower( '%".$this -> string_search."%' ) AND lang_id=".$this -> lang."
//				UNION 
//				SELECT menu_id FROM t_menu INNER JOIN t_pages using( menu_id ) WHERE lower( page_content ) ilike lower( '%".$this -> string_search."%' ) AND lang_id=".$this -> lang."";
//		$stmt = $dbh->prepare($sql);
//		//$stmt->bindParam(':string_search1', $this -> string_search, PDO::PARAM_STR);
//		//$stmt->bindValue(':string_search2', $this -> string_search, PDO::PARAM_STR);
//		$stmt->execute();
//		$count = $stmt->rowCount();
//		$arr = array();
//		$menu_id = '';
//		if ( $count > 0 ) {
//			foreach( $stmt as $row ){
//				$menu_id = $row[0];		
//			}
//		}else{
//				}
//		return $menu_id;
//	}

	function getPages(){

		return $this-> arrPages;
	}
        
         public function searchAll($keywords){
            //SELECT *, MATCH (article_name) AGAINST ('test') AS Score FROM article ORDER BY score DESC;
            
             $data = get_rows( " SELECT 
                    a.article_name AS name,
                    a.page_id,
                    a.lang_id,
                    'article' as type,
                    MATCH (`article_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE) AS score
                    FROM article a 
                    WHERE a.lang_id = ".$_SESSION['S_LangID']."
                    AND MATCH (`article_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE)
                    
                    UNION ALL
                    SELECT 
                    m.menu_name AS name,
                    m.page_id,
                    m.lang_id,
                    'menu' as type,
                    MATCH (`menu_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE) AS score
                    FROM menu m
                    WHERE m.lang_id = ".$_SESSION['S_LangID']."
                    AND MATCH (`menu_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE)
                        
                    UNION ALL
                    SELECT 
                    b.blog_name AS name,
                    b.page_id,
                    b.id = ".$_SESSION['S_LangID'].",
                    'blog' as type,
                    MATCH (`blog_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE) AS score
                    FROM blog b
                    WHERE MATCH (`blog_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE)
                        
                    UNION ALL
                    SELECT 
                    p.page_name AS name,
                    p.id,
                    p.lang_id,
                    'page' as type,
                    MATCH (`page_name`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE) AS score
                    FROM page p
                    WHERE p.lang_id = ".$_SESSION['S_LangID']."
                    AND MATCH (`page_name`,`page_content`) AGAINST ('*".$keywords."*' IN BOOLEAN MODE)
                    AND p.page_content NOT LIKE '%src=%'
                    

                    ORDER BY score DESC
                ");
        
        
        $arraysearch = array(
        );
        
        if($data != NULL){
            foreach ($data as $row) {
                $arraysearch ['type'] = $row['type'];
                $arraysearch [$row['name']] = $row['page_id'];
                
            }
            
           
            
            
        }else{
                echo 'error no results';
            }
		
            
             return $arraysearch;
         }
         

        
        private function searchPage(){
            //SELECT *, MATCH (article_name) AGAINST ('test') AS Score FROM article ORDER BY score DESC;
		global $dbh;
		/*$sql = "SELECT menu_id FROM t_menu WHERE lower( menu_name ) ilike lower( '%".$this -> string_search."%' ) AND lang_id=".$this -> lang."
				UNION 
				SELECT menu_id FROM t_menu INNER JOIN t_pages using( menu_id ) WHERE lower( page_content ) ilike lower( '%".$this -> string_search."%' ) AND lang_id=".$this -> lang."";
                 * 
                 */
                
		$sql= " SELECT 'article' as result_type, a.id FROM article as a
    WHERE MATCH(article_name) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)
union 
SELECT  'page' as result_type, p.id FROM page as p
        WHERE MATCH(page_content) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)
union 
SELECT  'page' as result_type, p.id FROM page as p
        WHERE MATCH(page_name) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)
union 
SELECT  'blog' as result_type, b.id FROM blog as b
        WHERE MATCH(blog_name) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)
union 
SELECT  'institute' as result_type, i.id FROM institute as i
        WHERE MATCH(institute_name) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)
union 
SELECT  'branch' as result_type, br.id FROM branch as br
        WHERE MATCH(branch_name) AGAINST ('*".$this -> string_search."*' IN BOOLEAN MODE)";
                
                $stmt = $dbh->prepare($sql);
		//$stmt->bindParam(':string_search1', $this -> string_search, PDO::PARAM_STR);
		//$stmt->bindValue(':string_search2', $this -> string_search, PDO::PARAM_STR);
		$stmt->execute();
		$count = $stmt->rowCount();
		$arr = array();
		$menu_id = '';
		if ( $count > 0 ) {
			foreach( $stmt as $row ){
				$menu_id = $row[0];		
			}
		}else{
				}
		return $menu_id;
	}
    /*    $query = "

        SELECT * FROM articles

        WHERE MATCH(title, body) AGAINST ('PHP')

    ";

    $sql = MySQL_query($query);

    /* output results */

}

