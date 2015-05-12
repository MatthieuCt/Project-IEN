<?php
    require_once ('database.php');

    function clearCase($str) {
        $str = str_replace("\\", "", $str);
        $str = str_replace("/", "", $str);
        $str = str_replace("'", "", $str);
        $str = str_replace('"', "", $str);
        $str = str_replace('-', "", $str);
        $str = str_replace(' ', "", $str);
        return $str;
    }

    //Jezeli zmienna nie istnieje zwraca pusty string.
    function clearVar($var) {
	if(!isset($var)) {
	    return "";
	}
        
        return addslashes($var);
        
    }
    
    /** funkcja uaktualnia dane w formularzu na podstawie informacji w definicji formy oraz na podstawie zmiennej id przekazanej w GET!
      *
      */
    function updateFormData($form) {
      
        $tableName = $form["table_name"];
        foreach( $form['fields'] as $field){
            $columns[] = $field['name'];       
        }
        $id = clearVar($_GET["id"]);
        $form["id"] = $id;
        
        $sql = "select ".implode(", ", $columns)." from $tableName where id=$id";
        $data = get_row($sql);
        $i = count($form["fields"]);
        for($j=0; $j<$i; $j++) {
            $form["fields"][$j]["default"] = $data[$form["fields"][$j]["name"]];
        }
        
        return $form;
    }
    /**
     * Pobranie formularza i nadpisanie danymi z POSTa
     * @param type $form 
     */
    function getForm($form){
        $tableName = $form["table_name"];
        foreach( $form['fields'] as $field){
            $columns[] = $field['name'];       
        }
        $id = clearVar($_GET["id"]);
        $form["id"] = $id;
        
        $sql = "select ".implode(", ", $columns)." from $tableName where id=$id";
        $data = get_row($sql);
        $i = count($form["fields"]);
        for($j=0; $j<$i; $j++) {
            $form["fields"][$j]["default"] = $data[$form["fields"][$j]["name"]];
        }
        if($_POST){
            foreach( $_POST as $k => $v){
                for($j=0; $j<$i; $j++) {
                    if($form["fields"][$j]['name'] == $k){
                        $form["fields"][$j]["default"] = $v;
                    }
                }
            }
        }

        return $form;
    }
    
     function createDictionary($option_id_name, $table, $id, $value_column, $order="1 asc", $where="1=1", $default_id=null, $allowempty=false) {
        $sql = "select distinct $id, $value_column from $table where $where order by $order";
        $data = get_rows($sql);
        
        $dict = "";
        if($allowempty) {
            if( is_array($allowempty) ){
                foreach( $allowempty as $key => $val ){
                    $dict.="<option $selected id=\"".$option_id_name."_NULL\" value=\"".$key."\">".($val!=""? $val : "-- Brak --")."</option>";
                }
            }else{
                $dict.="<option $selected id=\"".$option_id_name."_NULL\" value=\"NULL\">".($allowempty!=""? $allowempty : "-- Brak --")."</option>";
            }
        }
        if($data != NULL )
            foreach($data as $row) {

                $selected = "";
                if($default_id!=null) {
                    if($default_id==$row[$id]) {
                        $selected = "selected";
                    }
                }
                $dict.="<option $selected id=\"".$option_id_name."_".$row[$id]."\" value=\"".$row[$id]."\">".$row[$value_column]."</option>\n";
            }       

        return $dict;


    }

    function createDictionaryFromArray($option_id_name, $array_data, $default_id=null, $allowempty=false) {

        $data = $array_data;
        //print_r( $data );
        $dict = "";
        if($allowempty) {
            if( is_array($allowempty) ){
                foreach( $allowempty as $key => $val ){
                    $dict.="<option $selected id=\"".$option_id_name."_NULL\" value=\"".$key."\">".($val!=""? $val : "-- Brak --")."</option>";
                }
            }else{
                $dict.="<option $selected id=\"".$option_id_name."_NULL\" value=\"NULL\">".($allowempty!=""? $allowempty : "-- Brak --")."</option>";
            }
        }
        foreach($data as $k => $v) {
            $selected = "";
            if($default_id!=null) {
                if($default_id==$k ){
                    $selected = "selected";
                }
            }
            $dict.="<option $selected id=\"".$option_id_name."_".$k."\" value=\"".$k."\">".$v."</option>\n";
        }

        return $dict;


    }
    
    function saveFormData($form, $return=TRUE, $add_user=TRUE, $extra_fields=array()) {

        $uid = $_SESSION["S_UserID"];       
    
        $id = clearVar($_POST["id"]);  
        
        $data = getForm($form);       
        
        $tableName = $form["table_name"];
        
        $fields = array();
         
        foreach( $data['fields'] as $k => $item){
            if( $item['type'] != 'showonly')
            {
                $fields[':'.$item['name']] = $item['default'];
                $query_ins_col .=  ($query_ins_col==""?"":", ").$item['name'];
                $query_ins_val .=  ($query_ins_val==""?"":", ").":".$item['name'];
                $query_upd     .=  ($query_upd==""?"":", ").$item['name']."=:".$item['name'];
                
            }
        }
        
        //extra
        if(count($extra_fields)>0){
            foreach( $extra_fields as $key => $val ){
                if( strpos( $val, 'CURRENT_') === FALSE and strpos( $val, 'NULL') === FALSE){
                    $fields[':'.$key] = $val;
                    $query_ins_col .= ','.$key;
                    $query_ins_val .=  ',:'.$key;
                    $query_upd     .=  ','.$key.'=:'.$key.'';
                }else{
                    $query_ins_col .= ','.$key;
                    $query_ins_val .=  ','.$val;
                    $query_upd     .=  ','.$key.'='.$val.'';
                }
            }
        }
        
        if($uid!="" && $add_user) {
            $fields[':uzytkownik_id'] = $uid;
            $query_ins_col .= ',uzytkownik_id';
            $query_ins_val .=  ',:uzytkownik_id';
            $query_upd     .=  ',uzytkownik_id=:uzytkownik_id';
        } 
        
        if($id=="") {
            $query = 'INSERT INTO '.$tableName.'('.$query_ins_col.') VALUES ('. $query_ins_val .')';

            $id = insert($query, $fields, $error );      
            
        } else {
            $query_upd = 'UPDATE '.$tableName.' SET '.$query_upd.' WHERE id='.$id;
            //echo $query_upd;
            update($query_upd, $fields, $id , $error);
        }

        if( count($error)>0){
            print_r($error);
            die("");
        }else{
                //die();

            $return_module = clearVar($_POST["return_module"]);
            $return_action = clearVar($_POST["return_action"]);

            if($return) {
                header("Location: ../../index.php?module=$return_module&action=$return_action");
                die();
            }else{
                return $id;
            }
        }
        
    }
    
    //Function return label.
    function label($var) {
        global $G_LABELS;
	if(empty($G_LABELS[$var])) {
	    return $var;
	}
        
        return $G_LABELS[$var];
        
    }

?>
