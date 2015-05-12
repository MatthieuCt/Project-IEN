<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CmsLang
 *
 * @author Louis Hancquart
 */


class CmsLang {
    
    public $lang_id;
 
    /**
     *This is the constructor of the CmsLang 
     */
    
    public function __construct () {

        if($_GET['lang_id']!=""){
            $active = $this->get_active($_GET['lang_id']);
            if($active==1){
                $_SESSION['S_LangID']=$_GET['lang_id'];
            }
        }else{
            if($_SESSION['S_LangID']==""){
                $_SESSION['S_LangID']=$this->get_first_active();
            }else{
                if($this->get_active($_SESSION['S_LangID']) != 1){
                    $_SESSION['S_LangID']=$this->get_first_active();
                }
            }
        }
        
        if($_SESSION['S_LangID']==""){
            $_SESSION['S_LangID']=1;
        }
    }


    public function get_array_lang(){

        $sql = "SELECT id FROM lang WHERE active=1 ORDER BY id ASC";

        $data = get_rows($sql);
        
        return $data;

    }

    public function get_active($lang_id){
        $data = get_row("SELECT active FROM lang WHERE id=:id",array(":id"=>$lang_id));
        return $data;      
    }
    
    public function get_first_active(){
        if($this->get_array_lang()==NULL) return;
        return array_shift(array_shift(array_values($this->get_array_lang())));
    }
  
}

?>
