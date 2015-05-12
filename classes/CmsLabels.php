<?php
/**
*  CmsLabels.php - class for collect labels from db.
 * 
*  @author Rémy LOGIE 
*  @version SVN: $Id$
*  @license PRIVATE
*/
require_once 'common/database.php';

class CmsLabels {

    private $arraylabels;

    function __construct() {
        /**
         * Get Labels from database
         */
        $data = get_rows("SELECT * FROM label WHERE lang_id= :langid ", array(":langid" => $_SESSION['S_LangID']));
        $arraylabels = array();
        if($data != NULL){
            foreach ($data as $row) {

                $arraylabels[$row['label_name']] = $row['label_value'];
            }
        }
        /**
         * Get Labels from message.ini file - storage labels for backend 
         * AND merge to front-end labels
         */
        $_MSG = array();
        $_MSG = parse_ini_file($project_dir.'configs/messages.ini', true);
        $_MSG = $_MSG[$_SESSION['S_LangID']];
        
        if(!is_array($_MSG)){
            $_MSG=array();
        }

        $this->arraylabels = $arraylabels;
        global $G_LABELS;
        $G_LABELS = array();
        $G_LABELS = array_merge( $this->arraylabels, $_MSG );
        
    }

    /**
     * Porbanie label
     * @param type $label_type (label|submenu)
     */
    public function get($labels_type = 'arraylabels') {
        $ret = array();
        $ret = $this->arraylabels;
        return $ret;
    }

}

?>
