<?php
require_once 'form.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$navigation = array(
    array(  "module" => "administration",
            "action" => "dashboard",
            "label"  => label("LABEL_DASHBOARD")
    ),
     array(  "module" => "institute",
            "action" => "list",
            "label"  => label("LABEL_INSTITUT"),
            "submenu" => array(
                array( 
                    "module" => "institute",
                    "action" => "list",
                    "label"  => label("LABEL_INSTITUT_LIST")
                ),            
                array( 
                    "module" => "institute",
                    "action" => "add",
                    "label"  => label("LABEL_INSTITUT_ADD")
                )        
            )
    ),
    array(  "module" => "employee",
            "action" => "list",
            "label"  => label("LABEL_EMPLOYEE"),
            "submenu" => array(
                array( 
                    "module" => "employee",
                    "action" => "list",
                    "label"  => label("LABEL_EMPLOYEE_LIST")
                ),            
                array( 
                    "module" => "employee",
                    "action" => "add",
                    "label"  => label("LABEL_EMPLOYEE_ADD")
                )        
            )
    ),
    array(  "module"  => "blogs",
            "action"  => "list",
            "label"   => "Blogs",
            "submenu" => array(
                array( 
                    "module" => "blogs",
                    "action" => "list",
                    "label"  => label("LABEL_BLOG_LIST")
                ),
                array(
                    "module" => "blogs",
                    "action" => "add",
                    "label"  => label("LABEL_BLOG_ADD")
                )
            )
    ),
    array(  "module" => "articles",
            "action" => "list",
            "label" => label("LABEL_ARTICLE"),
            "submenu" => array(
                array( 
                    "module" => "articles",
                    "action" => "list",
                    "label"  => label("LABEL_ARTICLE_LIST")
                ),
                array(
                    "module" => "articles",
                    "action" => "add",
                    "label"  => label("LABEL_ARTICLE_ADD")
                )
            )
    ),
    array(  "module" => "labels",
            "action" => "list",
            "label" => label("LABEL_LABEL"),
            "submenu" => array(
                array( 
                    "module" => "labels",
                    "action" => "list",
                    "label"  => label("LABEL_LABEL_LIST")
                ),
                array(
                    "module" => "labels",
                    "action" => "add",
                    "label" => label("LABEL_LABEL_ADD")
                )
            )
    ),
    array("module" => "menu",
        "action" => "list",
        "label" => label("LABEL_NAVIGATION"),
        "submenu" => array(
            array(
               "module" => "menu",
               "action" => "list",
               "label"  => label("LABEL_NAVIGATION_LIST")
            ),
            array(
               "module" => "menu",
               "action" => "add",
               "label"  => label("LABEL_NAVIGATION_ADD")
            )            
        )
    ),
    array("module" => "lang",
        "action" => "list",
        "label" => label("LABEL_LANGUAGE")
        /*,
        "submenu" => array(
            array(
               "module" => "lang",
               "action" => "list",
               "label"  => label("LABEL_LANGUAGE_LIST")
            ),
            array(
               "module" => "lang",
               "action" => "add",
               "label"  => label("LABEL_LANGUAGE_ADD")
            )          
        )*/  
    ),
    array(  "module" => "user",
            "action" => "list",
            "label"  => label("LABEL_USER"),
            "submenu" => array(
                array( 
                    "module" => "user",
                    "action" => "list",
                    "label"  => label("LABEL_USER_LIST")
                ),
                array(
                    "module" => "user",
                    "action" => "add",
                    "label" => label("LABEL_USER_ADD")
                ),
                array(
                    "module" => "permission",
                    "action" => "list",
                    "label" => label("LABEL_PERMISSION_LIST")
                ),
                array(
                    "module" => "permission",
                    "action" => "add",
                    "label" =>  label("LABEL_PERMISSION_ADD")
                )
            )
    ),
    array(  "module" => "user",
            "action" => "logout",
            "label" => "Logout"
    ),
);
?>
