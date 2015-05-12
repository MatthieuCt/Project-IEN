<?php
require_once("common/session_validator.php");
require_once("common/database.php");

    $data = get_rows('SELECT p.*, g.name FROM permission as p LEFT JOIN `group` as g on p.group_id=g.id');
    
    $smarty -> assign('data', $data);

?>
