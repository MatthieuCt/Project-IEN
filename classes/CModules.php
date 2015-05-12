<?php
require_once 'common/database.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CModule {
    private $modules;
    function __construct () {

    }
    
    /**
     * Sprawdzenie czy uzytkownik ma dostep do modul i akcji
     * @param type $module
     * @param type $action
     * @return boolean 
     */
    function is_allow($module, $action){
        $data = get_row('SELECT 1 as allow FROM permission WHERE group_id=:user_group_id and module=:module and action=:action;',
                        array(
                            ':user_group_id'=>$_SESSION['S_GroupID']
                            ,':module' => $module
                            ,':action' => $action
                        )       
                );
        if($data['allow'] == 1){
            $ret = TRUE;
        }else{
            $ret = FALSE;
        }
        return $ret;
    }
    
    /**
     * Sprawdzenie uprawniene do modułow
     * @param type $modules
     * @return type 
     */
    function checkPrivilages($modules){
        $return = array();
        $i=-1;
        foreach ($modules as $key => $item) {
            if( $this ->is_allow($item['module'], $item['action']) === TRUE){
                $i++;
                $return[$i] = $item;
                if(array_key_exists('submenu', $item)){
                    $tmp = array();
                    foreach ($item['submenu'] as $key2 => $item2) {
                        if( $this ->is_allow($item2['module'], $item2['action']) === TRUE){
                            $tmp[] = $item2;
                        }
                    }
                    if($i>=0)$return[$i]['submenu'] = $tmp;
                }  
            }
            
        }
        return $return;
    }
}
?>
