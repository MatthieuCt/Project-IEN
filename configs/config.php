<?php
    

     // Real directory where all php files are located.
    $project_dir =  realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "..");
    echo $project_dir;
echo DIRECTORY_SEPARATOR;

    set_include_path(get_include_path() . PATH_SEPARATOR .
               $project_dir . PATH_SEPARATOR .
               $project_dir . DIRECTORY_SEPARATOR . 'inc'  . PATH_SEPARATOR .
               $project_dir . DIRECTORY_SEPARATOR . 'libs' . PATH_SEPARATOR .
               $project_dir . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'smarty' . PATH_SEPARATOR .
               $project_dir . DIRECTORY_SEPARATOR . 'classes' );
  
    
    define ('PROJECT_DIR', $project_dir);
    define ('DS', DIRECTORY_SEPARATOR);
    define ('DEVELOPER', 1);
    
    # config page address
    define('HTTP_ADDRESS', 'http://web1.p4y.pl/');
    define('WEBMASTER', 'christophe.f62@gmail.com');
    define('PAGE_TITLE','ien.pw.edu.pl');
    define('LOGON',0); // 1-on, reqiured 0->not required
    define('MODE', 'DEBUG'); // ''->production; DEBUG -> DEBUGER;
    # end config page address
    
    # messages
    global $_MSG;
    $_MSG = parse_ini_file($project_dir.'\configs' .DIRECTORY_SEPARATOR . 'messages.ini', true);
    $_MSG = $_MSG['polish'];
    
    //Default module and action, please set below
    $default_module = "page";
    $default_action = "homepage";
    ?>
