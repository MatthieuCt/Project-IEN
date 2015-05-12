<?php
require_once("../../common/form.php");
require_once '../../classes/CFiles.php';
require_once 'common/session_validator.php';
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

$targetFolder = '../../_uploaded';

if (!empty($_FILES)) {
    $myfiles = new CFiles();
    $file_name = $myfiles->generateRandomString();
    $tempFile = $_FILES['Filedata']['tmp_name'];
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
    $fileParts = pathinfo($_FILES['Filedata']['name']);
    $targetFile = rtrim($targetPath,'/') . '/' . $file_name . '.' . $fileParts['extension'];

    // Validate the file type
    $fileTypes = array('jpg','jpeg','gif','png'); // File extensions

    if (in_array($fileParts['extension'],$fileTypes)) {
            move_uploaded_file($tempFile,$targetFile);
            $hash_code= $_POST['hash_code'];
            if($hash_code==""){
                $hash_code=$myfiles->generateRandomString(11, true);
                update("UPDATE page SET page_files=:hash WHERE id=:id",array(":hash"=> $hash_code ,":id"=>$_POST['page_id']));
            }
            $file_id=$myfiles->uploadFile($hash_code, $file_name, $_FILES['Filedata']['name'], $_FILES['Filedata']['type'], $fileParts['extension'],$_POST['user_id']);
            
            echo $file_name." ; ".'<a href="../../download.php?file_id='.$file_id.'">'.$_FILES['Filedata']['name'].'</a>'."<a href='#' onclick='deleteFile(\"".$file_name."\",\"".$fileParts['extension']."\");'>Delete</a>";
    } else {
            echo 'Invalid file type.';
    }
}
?>