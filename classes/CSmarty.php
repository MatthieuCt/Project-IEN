<?php

class CSmarty {
        function __construct ($tpl_name) {

            $this -> template_file = $tpl_name;
            $this -> subsmarty = new Smarty();
            $this -> subsmarty->template_dir = PROJECT_DIR.'/templates';
            $this -> subsmarty->compile_dir = PROJECT_DIR.'/templates_c';
            $this -> subsmarty->cache_dir = PROJECT_DIR.'/cache';
            $this -> subsmarty->config_dir = PROJECT_DIR.'/config';


        }
        function getOutput () {
            return $this -> subsmarty -> fetch( $this->template_file  );

        }
	
	
	/**
	 * metoda taka jak w smarty
	 * @return 
	 * @param $where Object
	 * @param $what Object
	 */
	public function assign( $where , $what ) {
		$this -> subsmarty -> assign ( $where , $what );
	}
	
	
	private $subsmarty;
	private $template_file = '';
}

?>
