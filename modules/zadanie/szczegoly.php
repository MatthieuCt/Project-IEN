<?php
require_once 'common/form.php';
require_once("common/session_validator.php");
require_once("common/database.php");
    $id = clearVar($_GET['id_data']);
    if( ! in_array( $_SESSION['S_GrupaID'], array(1,2) ) ) $extra_sql = ' AND zadanie.usun<>1 AND ( zadanie.ukryj=0 OR ( zadanie.ukryj=1 AND zadanie.uzytkownik_id ='.$_SESSION['S_UserID'].' ) )';
    $data = get_row(' SELECT zadanie.* 
                            , uzytkownik.user_name as zmodyfikowano_przez
                            , u2.id as dodano_przez_id
                            , u2.user_name as dodano_przez
                            , poziom_trudnosci.nazwa as poziom
                            , k.nazwa as kategoria_nazwa
                            , k.nadkategoria as nadkategoria_nazwa
                        FROM zadanie 
                        LEFT JOIN uzytkownik on zadanie.uzytkownik_id=uzytkownik.id
                        LEFT JOIN uzytkownik as u2 on zadanie.dodano_przez_uzytkownik_id=u2.id
                        LEFT JOIN poziom_trudnosci on zadanie.poziom_trudnosci=poziom_trudnosci.id
                        LEFT JOIN ( select k.id, k.nazwa, k2.nazwa as nadkategoria from kategoria k LEFT JOIN kategoria k2 on k.kategoria_id=k2.id ) as k on zadanie.kategoria_id=k.id
                        WHERE zadanie.id='.$id.' '.$extra_sql
                    );
   
    $smarty -> assign('data', $data);
    
    
    // komentarze
    $data = get_rows(' SELECT komentarz.*, uzytkownik.user_name as uzytkownik
                        FROM komentarz 
                        LEFT JOIN uzytkownik on komentarz.uzytkownik_id=uzytkownik.id
                        WHERE usun is null AND zadanie_id='.$id
                    );
    
    $smarty -> assign('komentarze', $data);

?>
