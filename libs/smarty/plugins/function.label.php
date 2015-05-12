<?php
/**
 * Smarty plugin
 * @package ADO
 * @subpackage plugins
 */


/**
 * Smarty {label} function plugin
 *
 * Type:     function<br>
 * Name:     label<br>
 * Purpose:  <br>
 * @link http://smarty.php.net/manual/en/language.function.eval.php {eval}
 *       (Smarty online manual)
 * @author Andrzej Domurat andrzej.domurat@gmail.com
 * @param array
 * @param Smarty
 */
function smarty_function_label($params, &$smarty)
{

    if (!isset($params['get']) ){
        $smarty->trigger_error("label: missing 'get' parameter");
        return;
    }

    if($params['get'] == '') {
        return;
    }

    global $G_LABELS;
    if (!isset($params['assign'])){
        if (empty($G_LABELS[ $params['get']])) {
            return $params['get'];
        } else {
            return $G_LABELS[ $params['get']];
        }
    }else{
        $smarty->assign($params['assign'], ( empty($G_LABELS[ $params['get']]) ? $params['get'] : $G_LABELS[ $params['get']] ) );
    }
}
?>