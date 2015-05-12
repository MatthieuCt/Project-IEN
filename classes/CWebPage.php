<?php

class CWebPage {
	function __construct ($template_name, $index_tpl = 'index.tpl', $template_dir='') {
    
		$this -> smarty = new Smarty();
		$this -> smarty->template_dir = PROJECT_DIR.'/templates'.$template_dir ;
		$this -> smarty->compile_dir = PROJECT_DIR.'/templates_c'.$template_dir;
		$this -> smarty->cache_dir = PROJECT_DIR.'/cache';
		$this -> smarty->config_dir = PROJECT_DIR.'/config';
		$this -> smarty->compile_check = true;

                $this -> template_index_file = $index_tpl;
                $this -> template_dir = $template_dir;

		return $this -> createSubSmarty($template_name);
 
	}
	function __destruct () {

            if($this -> Content == ""){
                $this -> Content = $this -> subsmarty -> fetch($this->template_file);
            }
            // chnage urls /index.php?module=[]&action=[]&...
            // into
            // /module/action/index.html?reszta
            $this -> Content = preg_replace('/(index.php)(\?module=)([a-z]+)(\&amp;action=|\&action=)([a-z]+)/', '/\3/\5/index.html?' , $this -> Content);
            $this -> Content = preg_replace('/(index.html\?\")/', 'index.html"' , $this -> Content);
            $this -> Content = preg_replace('/(href="\/\/)/', 'href="/' , $this -> Content);
            $this -> Content = preg_replace('/(index.html\?\&)(amp;)/', 'index.html?' , $this -> Content);
            $this -> Content = preg_replace('/(src="\/)/', 'src="'.HTTP_ADDRESS , $this -> Content);
            $this -> Content = preg_replace('/(src="images\/)/', 'src="'.HTTP_ADDRESS.'images/' , $this -> Content);
            
            $this -> smarty->assign('Content', $this -> Content );
            $this -> smarty->assign('Title', $this -> Title );
            $this -> smarty->assign('JSScripts', $this -> JSScripts );
            $this -> smarty->assign('Csses', $this -> Csses );
            $this -> smarty->assign('OnLoad', $this -> OnLoad );
            // show main template
            $this -> smarty-> display($this -> template_index_file);
	}
	
	
	private function createSubSmarty($tpl_name){
	  $this -> template_file = $tpl_name;
		$this -> subsmarty = new Smarty();
		$this -> subsmarty->template_dir = PROJECT_DIR.'/templates';
		$this -> subsmarty->compile_dir = PROJECT_DIR.'/templates_c';
		$this -> subsmarty->cache_dir = PROJECT_DIR.'/cache';
		$this -> subsmarty->config_dir = PROJECT_DIR.'/config';
		
		return $this -> subsmarty;
        }
	
        /**
	 * metoda taka sama jak w smarty
	 * @return 
	 * @param $where Object
	 * @param $what Object
	 */
	public function assign( $where , $what ) {
		$this -> subsmarty -> assign ( $where , $what );
	}
	
	function assignSmarty ( $where , $what ) {
		$this -> smarty -> assign ( $where , $what );
	}
	function Content () {
		return $this -> Content;
	}
	function setContent ( $Value ) {
		$this -> Content = $Value;
	}
	function Title () {
		return $this -> Title;
	}
	function setTitle ( $Title ) {
		$this -> Title = $Title;
	}
	function setJSScripts ( $ListaSkryptow ) {
                if( is_array( $ListaSkryptow ) )  $List = $ListaSkryptow;
		else $List = explode (',',$ListaCssow);
		foreach ( $List as $Value ) {
		
		  if( strpos( $Value, 'http:' ) === FALSE ){
  			$path = 'js/'.$Value;
  		  if( ! file_exists( $path )){
  		    $path = '../'.$path;
  		    $this -> JSScripts .= '<script type="text/javascript" src="'.$path.'"></script>';
                    }else{
                      $this -> JSScripts .= '<script type="text/javascript" src="'.HTTP_ADDRESS.$path.'"></script>';
                    }

                  }else{
                    // bezposredni link
                     $this -> JSScripts .= '<script type="text/javascript" src="'.$Value.'"></script>';
                  }
		}
	}
	
	function setCsses ( $ListaCssow ) {
                if( is_array( $ListaCssow ) )  $List = $ListaCssow;
		else $List = explode (',',$ListaCssow);
		foreach ( $List as $Value ) {
                  if( strpos( $Value, 'http:' ) === FALSE ){
                      $path = 'css/'.$Value;
                      if( ! file_exists( $path )){
                        $path = '../'.$path;
                        $this -> Csses .= '<link href="'.$path.'" type="text/css" rel="stylesheet" />';
                      }else{
                        $this -> Csses .= '<link href="'.HTTP_ADDRESS.$path.'" type="text/css" rel="stylesheet" />';
                      }
                  }else{
                      // bezposredni link
                      $this -> Csses .= '<link href="'.$Value.'" type="text/css" rel="stylesheet" />';
                  }
		}
	}

	function setOnLoad ( $ValueOnLoad ) {
		$this -> OnLoad = $ValueOnLoad;
	}
	function setBodyCsses ( $ValueBodyCsses ) {
		$this -> BodyCsses = $ValueBodyCsses;
	}
	
	private $Content = '';
	private $Title = '';
	private $OnLoad = '';
	private $JSScripts = '';
	private $VBScripts = '';
	private $Csses = '';
	private $BodyCsses = '';
	private $smarty;
	
	private $subsmarty;
	private $template_file = '';
        private $template_index_file;
        private $template_dir='';
}

?>
