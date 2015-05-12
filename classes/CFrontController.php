<?php
/**
*  CFrontController.php - major file from application.
 * 
*  @author Andrzej Domurat (andrzej.domurat@gmail.com)
*  @version SVN: $Id$
*  @license PRIVATE
*/

class CFrontController {
    private $_requestParams = array ();
    private $request;

    private $results;
    
    /**
     * Konstruktor FrontContrllera - Core systemu
     */
    public function __construct () {

            $this->request = $_SERVER["REQUEST_URI"];
            $this->request = str_replace(PROJECT_PATH,"",$this->request);
            $this -> filterParam();
            //$this -> validParam();
            
    }

    /**
      * odczytaj dane przychodzace z URL
    */
    private function filterParam(){
    	// odczytaj dane przychodzace z URL
      if( strpos( $this->request, '.html' ) === FALSE ){
        $address1   = parse_url( $this->request );
      }else{
        foreach($_GET as $k => $v ){
          $address1['query'] = $address1['query'].'&'.$k.'='.$v;
        }
      }
    	
    	
      $qq   = explode('&', $address1['query'] );
      foreach($qq as $q){
      	$row = explode( "=", $q );
      	$this -> setParam($row[0],$row[1]);
      }
    }
    
    /**
     * Metoda do pobieranie parametrow
     * @param type $paramName
     * @return type 
     */    
    public function getParam($paramName)
    {
        if( isset($this->_requestParams[$paramName]) )
        {
            return $this->_requestParams[$paramName];
        }
        else
        {
            return false;
        }
    }
 
    /**
     * Utawianie parametru
     * @param type $paramName
     * @param type $paramValue 
     */
    public function setParam($paramName,$paramValue)
    {
        $this->_requestParams[$paramName] = $paramValue;
    }

    /**
     * Ładowanie controllera (Modulu oraz akcji) mod - module , act-action
     */
    private function loadController(){
        global $G_LABELS;
        ## ladujemy kontroler
        $controller_name	= strtolower( $this->getParam('module') );
        $controller_action	= strtolower( $this->getParam('action') );
        // jesli kontroler nie jest pusty sprawdzamy czy istnieje akcja
        if ( $controller_name != '' && $controller_action != '' )
        {
                // jesli zadany kontroler istnieje w systemie, ladujemy go
                $exec_file = PROJECT_DIR.'/modules/'.$controller_name.'/'.$controller_action.'.php';
                if( file_exists( $exec_file ) === FALSE ){
                     $this -> results = $G_LABELS['BAD_REQUEST_ACTION'];   
                }else{
                    // sprawdzenie czy masz prawa do wykonanie czynnosci
                    require_once ('CModules.php');
                    $mod = new CModule();
                    if( ! $mod ->is_allow($controller_name, $controller_action)){
                        $this -> results = $G_LABELS['BRAK_DOSTEPU']; 
                    }else{
                        // plik istnieje i mozemy wykonac jego
                        require_once ('CSmarty.php');
                        $smarty = new CSmarty($controller_name.'/'.$controller_action.".tpl");
                        $smarty ->assign('current_module', $controller_name);
                        $smarty ->assign('current_action', $controller_action);
                        $current_module = $controller_name;
                        $current_action = $controller_action;
                        require($exec_file);
                        $this -> results = $smarty ->getOutput();
                    }
                }
        }else{
            $this -> results = $G_LABELS['BAD_REQUEST'];
        }
    
    }
    
    public function getResults(){
        $this -> loadController();
        return $this -> results;
    }
    
}


?>