<?php

//require_once ('inc/core.php');
include_once ('/classes/CPageSearch.php');

class search{
	private $result;
	function __construct(){
	}
	public function show($request){
           /* $sql = " SELECT   DISTINCT 
                            p.page_id, 
                            p.page_content,
                            ext.page_name,
                            p.page_type,
                            p.updated_dt as article_date,
                            MATCH(p.page_content) AGAINST ('*".addslashes(urldecode($request['query']))."*') AS score
                    FROM t_pages p
                    INNER JOIN (
                        SELECT page_id, article_name as page_name FROM t_articles
                        UNION SELECT page_id, menu_name as page_name FROM t_menu
                        UNION SELECT page_id, unit_name as page_name FROM t_institute_units 
                    )as ext ON p.page_id=ext.page_id
                        WHERE MATCH(  p.page_content ) AGAINST ('*".addslashes(urldecode($request['query']))."*')
                        AND p.lang_id=".$request['lang']."
                    ORDER BY score DESC
                    ";*/
            

      get_rows($sql);  
        
      //echo $sql;
      $more = ( $_SESSION['arrayLabels']['TXT_MORE'] == '' ? 'TXT_MORE' : $_SESSION['arrayLabels']['TXT_MORE']);
	    $no_rows = ( $_SESSION['arrayLabels']['TXT_EMPTY'] == '' ? 'TXT_EMPTY' : $_SESSION['arrayLabels']['TXT_EMPTY']);
            $pager = new CPager($sql, 'page_id', 't_pages', 10);
	    $pager -> setLabels ( array( 'NO_RESULTS' => $no_rows ) );
	    $ret = '<div class="news-wrapper">';
	    $ret .= '<form method="get" action="index.php" id="fsearch">
                <input type="hidden" value="'.$request['lang'].'" name="lang" id="lang">
                <input type="hidden" value="search" name="c" id="c">';
	    $ret .= '<center><input type="text" style="color: black;" value="'.addslashes(urldecode($request['query'])).'" name="query" />';
			$ret .= '<input type="submit" value="Szukaj" /></center></form>';
	    $ret .= '<center>'.$pager -> getLinks().'</center>';
	    $ret .= '<ul class="NoBullet">';
      $col = array();
      $col['default'] = '';
      $col['separator']['before'] = '<li><div class="news-content">';
      $col['separator']['after'] = '</div>';
      $pager -> setColumn( 'page_name' , $col );
      $col = array();
      $col['default'] = '';
      $col['separator']['before'] = '<div class="news-more"> <div class="news-date">';
      $col['separator']['after'] = '</div>';
      $pager -> setColumn( 'article_date' , $col );
      $col = array();
      $col['default'] = '';
      $col['separator']['before'] = '<a href="?page=';
      $col['separator']['after'] = '" class="notLightbox">'.$more.'</a></div></li>';
      $col['type'] = 'link';
      $pager -> setColumn( 'page_id' , $col );        
	    $ret .= $pager -> getOutput();
		  $ret .= '</ul></div>'; 
	   return $ret;
	}
}
?>



        
        