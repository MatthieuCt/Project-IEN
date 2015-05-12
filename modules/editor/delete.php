<?php
require_once 'common/database.php';
$del=delete("DELETE FROM file WHERE file_name ='". $_POST['fileref']."'");
unlink("/_uploaded/".$_POST['fileref'].'.'.$_POST['fileExtension']);
?>