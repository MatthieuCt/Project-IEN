<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty escape modifier plugin
 *
 * Type:     modifier<br>
 * Name:     escape<br>
 * Purpose:  prepare string to megasennik
 * @link 
 *          escape (Smarty online manual)
 * @author   andrzej .domurat
 * @param string
 * @return string
 */
function smarty_modifier_prepare_url($string)
{
    // usunicie znakow polskich
    //$string = urlencode ($string);
    $string = strtolower( $string );
    $search  = array('ą','ć','ę','+','ó','ź','"', "'", '%C5%9B',' ', 'ś','ż','.','ń','ł' );
    $replace = array('a','c','e','_','o','z','',   '', 's'     ,'_', 's','z','' ,'n','l' );
    
    $string = str_replace($search, $replace, $string);



    return $string;
}

/* vim: set expandtab: */

?>
