<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CmsInstitute
 *
 * @author moimoi
 */
require_once("common/session_validator.php");
require_once("common/database.php");

class CmsInstitute {

    //put your code here
    private $list;
    private $sql;
    private $id;

    function __construct() {
        
    }

    public function getinstituteList() {


        $sql = get_rows("SELECT b.id, b.branch_name,b.page_id,b.active
                            FROM branch b where lang_id=" . $_SESSION['S_LangID']);
        $list=array();
        if($sql!=null){
            foreach ($sql as $rows) {
                if($rows['active']==1){
                    $list[$rows['id']] = array();
                    $list[$rows['id']]['branch_name'] = $rows['branch_name'];
                    $list[$rows['id']]['page_id'] = $rows['page_id'];
                    $data = get_row("select COUNT(e.id) as nb from branch b,employee e where 
                                        e.branch_id=b.id AND b.id=:id AND e.lang_id=:langid", array(':id' => $rows['id'],':langid' => $_SESSION['S_LangID']));
                    $list[$rows['id']]['nbEmployee'] = $data;
                }
            }
        }

        $this->list = $list;
        return $this->list;
    }

    public function getbranchList() {
        $sql = "SELECT b.id, b.branch_name, b.institute_id, b.lang_id, b.symbol, b.active
                            FROM branch b where lang_id=" . $_SESSION['S_LangID'];

        $this->list = get_rows($sql);
        return $this->list;
    }
    
      public function getBranchById($id) {
        
        if($_GET['token'] != ""){
            return $_SESSION[$_GET['token']];            
        }
         $this->id = $id;

        $data = get_row("select * from branch where id=" . $this->id);
        
        $this->list=$data;
        

        return $data['branch_name'];
        
    }

}

?>
