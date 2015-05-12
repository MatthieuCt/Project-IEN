<?php
require_once("common/session_validator.php");
require_once("common/database.php");

   $data = get_rows('select k1.id, k1.nazwa as kategoria_nazwa, CASE WHEN k2.nazwa IS NULL THEN \'-Kategoria główna-\' ELSE k2.nazwa END as nadkategoria_nazwa, k1.opis from kategoria k1 left join kategoria k2 on k1.kategoria_id=k2.id and k2.kategoria_id is null');
    
   $smarty -> assign('data', $data);

?>
