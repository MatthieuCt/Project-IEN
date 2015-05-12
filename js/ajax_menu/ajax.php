<?php

require_once ('/common/database.php');

echo "<select name='parent_menu_id'>";
$res = get_rows("SELECT id,menu_name FROM menu 
			WHERE lang_id= :langid ORDER BY id",array(':langid' => $_POST['lang_id']));
echo "<option id=\"parent_menu_id_NULL\" value='NULL'>-- Please choose --</option>";
foreach($res as $row){
    echo "<option id=\"parent_menu_id_" . $row["id"] . "\" value='" . $row["id"] . "'>" . $row["menu_name"] . "</option>";
}

echo "</select>";
?>