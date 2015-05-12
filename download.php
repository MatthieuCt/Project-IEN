<?php

require_once('configs/config.php');
include_once ('common/core.php');
require_once 'common/database.php';
include_once ('classes/CVisitorInfo.php');

$file_id = $_GET['file_id'];



// zapis do statystyk pobrania

if (array_key_exists('stat', $_GET) or array_key_exists('stat', $_POST)) {

    $stat = ($_GET['stat'] == '' ? ( $_POST['stat'] == '' ? 1 : $_POST['stat'] ) : $_GET['stat']);
} else {

    $stat = 1;
}

if ($stat == 1) {

    $info = new CVisitorInfo();

    $sql = "INSERT INTO t_file_downloads(file_id, user_ip) VALUES (:file_id, :user_ip);";
    
    insert($sql, array(":file_id"=>$file_id,":user_ip"=>$info->ip));
    
}



$sql = 'SELECT * FROM file WHERE id=' . $file_id;

$stmt = get_row($sql);

$content = '';

if ($stmt != NULL ) {

    $file_extension = $stmt['file_extension'];

    $file_path = $stmt['file_name'];

    $file_name = $stmt['file_label'];

    $pos1 = strrpos($file_path, "\\");

    $pos2 = strrpos($file_path, "/");

    $pos = ( $pos1 > $pos2 ? $pos1 : $pos2 );

    $file = substr($file_path, $pos + 1, strlen($file_path));

    $file_path = PROJECT_DIR . DS . '_uploaded' . DS . $file_path . "." . $file_extension;
}

switch ($file_extension) {

    case "application/pdf": case "pdf": $ctype = "application/pdf";
        break;

    case "exe": $ctype = "application/octet-stream";
        break;

    case "zip": $ctype = "application/zip";
        break;

    case "application/msword": case "doc": $ctype = "application/msword";
        break;

    case "xls": $ctype = "application/vnd.ms-excel";
        break;

    case "ppt": $ctype = "application/vnd.ms-powerpoint";
        break;

    case "gif": $ctype = "image/gif";
        break;

    case "png": $ctype = "image/png";
        break;

    case "jpeg":

    case "jpg": $ctype = "image/jpg";
        break;

    default: $ctype = "application/force-download";
}


header("Pragma: public"); // required

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Cache-Control: private", false); // required for certain browsers 

header('Accept-Charset: UTF-8');

header('Content-Type: ' . $ctype . ' charset="UTF-8";');





$file_name = htmlspecialchars($file_name, ENT_COMPAT, 'UTF-8');

header("Content-Disposition: attachment; filename=\"" . basename($file_name) . "\"; charset=\"UTF-8\";");

header("Content-Transfer-Encoding: binary");

header("Content-Length: " . filesize($file_path));

@readfile($file_path);

exit();
?>