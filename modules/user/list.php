<?php
require_once("common/session_validator.php");
require_once("common/database.php");

    $data = get_rows('SELECT u.*, g.name FROM user as u LEFT JOIN `group` as g on u.group_id=g.id');
    
    $smarty -> assign('data', $data);

?>
