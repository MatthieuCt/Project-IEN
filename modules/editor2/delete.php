<?php
require_once 'common/database.php';
require_once 'CModules.php';

delete("DELETE FROM files", $_GET['fileref']);
unlink("/_uploaded/".$_GET['fileref']);


?>
