<?php

require_once 'common/database.php';
require_once 'CModules.php';

class CmsMenu {

    private $menu;
    private $menu_sub;

    function __construct() {

        $data = get_rows("SELECT 
                                m.menu_name,m.module,m.action,m.page_id,m.active,m.publish_start_dt as startdt,m.publish_end_dt as enddt,
                                s.menu_name as submenu_name,s.module as submodule,s.action as subaction,s.page_id as subpage_id,
                                s.active as subactive,s.publish_start_dt as substartdt,s.publish_end_dt as subenddt
                            FROM menu m
                            LEFT JOIN menu s
                             ON s.parent_menu_id=m.id
                                AND ((s.page_id IS NOT NULL AND s.module = 'page') OR ( s.module <> 'page' AND s.action<>'page'))
                            WHERE ( (m.page_id IS NOT NULL AND m.module = 'page') OR ( m.module <> 'page' AND m.action<>'page') )
                             AND m.parent_menu_id IS NULL AND m.lang_id = :langid
                            ORDER BY m.id, s.id", array(':langid' => $_SESSION['S_LangID']));

        $menu = array();
        $menu_sub = array();
        $mod = new CModule();
        if($data!=NULL){
            foreach ($data as $row) {
                if ($row['active'] == 1) {
                    if ($row['startdt'] == NULL) {
                        $row['startdt'] = "0000-01-01 00:00:00";
                    }
                    if ($row['enddt'] == NULL) {
                        $row['enddt'] = "9999-12-31 23:59:59";
                    }
                    if (strtotime($row['startdt']) < strtotime(date('Y-m-d h:i:s')) && strtotime($row['enddt']) > strtotime(date('Y-m-d h:i:s'))) {
                        if ($mod->is_allow($row['module'], $row['action'])) {
                            $menu[$row['page_id']]['module'] = $row['module'];
                            $menu[$row['page_id']]['action'] = $row['action'];
                            $menu[$row['page_id']]['label'] = $row['menu_name'];
                            $menu[$row['page_id']]['page_id'] = $row['page_id'];
                            if ($row['submenu_name'] != "") {
                                if ($row['subactive'] == 1) {
                                    if ($row['substartdt'] == NULL) {
                                        $row['substartdt'] = "0000-01-01 00:00:00";
                                    }
                                    if ($row['subenddt'] == NULL) {
                                        $row['subenddt'] = "9999-12-31 23:59:59";
                                    }
                                    if (strtotime($row['substartdt']) < strtotime(date('Y-m-d h:i:s')) && strtotime($row['subenddt']) > strtotime(date('Y-m-d h:i:s'))) {
                                        if ($mod->is_allow($row['submodule'], $row['subaction'])) {
                                            $menu_sub[$row['page_id']][$row['submenu_name']]['module'] = $row['submodule'];
                                            $menu_sub[$row['page_id']][$row['submenu_name']]['action'] = $row['subaction'];
                                            $menu_sub[$row['page_id']][$row['submenu_name']]['label'] = $row['submenu_name'];
                                            $menu_sub[$row['page_id']][$row['submenu_name']]['page_id'] = $row['subpage_id'];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->menu = $menu;
        $this->menu_sub = $menu_sub;
    }

    /**
     * Porbanie menu
     * @param type $menu_type (menu|submenu)
     */
    public function get($menu_type = 'menu') {
        $ret = array();
        if ($menu_type == 'menu') {
            $ret = $this->menu;
        } else {
            $ret = $this->menu_sub;
        }
        return $ret;
    }

}

?>
