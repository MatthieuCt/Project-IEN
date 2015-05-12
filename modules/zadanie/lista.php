<?php
require_once("common/session_validator.php");
require_once("common/database.php");
    if( ! in_array( $_SESSION['S_GrupaID'], array(1,2) ) ) $extra_sql = ' WHERE zadanie.usun<>1 AND ( zadanie.ukryj=0 OR ( zadanie.ukryj=1 AND zadanie.uzytkownik_id ='.$_SESSION['S_UserID'].' ) )';
    $data = get_rows(' SELECT zadanie.* , uzytkownik.user_name, u2.id as dadano_przez_uzytkownik_id, u2.user_name as dodano_user_name
                        , k.nazwa as kategoria_nazwa, p.nazwa as poziom_trudnosci_nazwa
                        FROM zadanie 
                        LEFT JOIN uzytkownik on zadanie.uzytkownik_id=uzytkownik.id
                        LEFT JOIN uzytkownik u2 on zadanie.dodano_przez_uzytkownik_id=u2.id
                        LEFT JOIN kategoria k on zadanie.kategoria_id=k.id
                        LEFT JOIN poziom_trudnosci p on zadanie.poziom_trudnosci=p.id
                        '.$extra_sql.'
                        ORDER BY zadanie.data_modyfikacji DESC
                     ');
    
    $smarty -> assign('data', $data);

?>
