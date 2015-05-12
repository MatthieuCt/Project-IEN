<?php
    require_once 'configs/db.php';

    function do_query($query, $get_id=0){
        global $dbh;
        $dbh -> exec($query);
        if( $get_id==1) return $dbh->lastInsertId();
        else return null;
    }
    
    function get_row($query, $params=array()){
        global $dbh;
        try {
            $stmt = $dbh -> prepare($query);
            if( is_array(  $params) ){
                $i=0;
                foreach( $params as $pname => $pval){
                    if($pval=='Null'){
                        $stmt -> bindValue( $pname, $pval, PDO::PARAM_NULL ); 
                    }
                    else if(is_int($pval)){
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_INT ); 
                    }else{
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_STR );
                    }
                }

            }
            $stmt -> execute();
            if( $stmt -> rowCount() > 0 ){
                    $arrRet= $stmt -> fetch();
                    if( count( $arrRet ) == 2) $arrRet = $arrRet[0];
            }else{
                $arrRet = null;
            }
        } catch (PDOException $e){
            var_dump($stmt->errorInfo());
        }
        return $arrRet;
    }
    
    function get_rows($query, $params=array()){
        global $dbh;
        try {
            $stmt = $dbh -> prepare($query);
            if( is_array(  $params) ){
                foreach( $params as $pname => $pval){
                    if($pval=='NULL'){
                        $stmt -> bindValue( $pname, null, PDO::PARAM_NULL ); 
                    }
                    else if(is_int($pval)){
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_INT ); 
                    }else{
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_STR );
                    }
                }

            }
            $stmt -> execute();
            if( $stmt -> rowCount() > 0 ){
                    $arrRet= $stmt -> fetchAll();
            }else{
                $arrRet = null;
            }
        } catch (PDOException $e){
            var_dump($stmt->errorInfo());
        }
        return $arrRet;
    }
    
    function insert($query, $params=array(), &$errorInfo=''){

        //    echo $query;
        //    print_r($params);

        global $dbh;
        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Errorhandling to Exception
            $stmt = $dbh -> prepare($query);
            if( is_array(  $params) ){
                foreach( $params as $pname => $pval){
                    if($pval=='NULL' or $pval==''){
                        $stmt -> bindValue( $pname, null, PDO::PARAM_NULL ); 
                    }
                    else if(is_int($pval)){
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_INT ); 
                    }else{
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_STR );
                    }
                }

            }
            $stmt -> execute();
        } catch (PDOException $e){
            $errorInfo = $stmt->errorInfo();
        }
        return $dbh->lastInsertId();
    }
    
    function update($query, $params=array(), $id='', &$errorInfo=''){
        global $dbh;
        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Errorhandling to Exception
            $stmt = $dbh -> prepare($query);
            if( is_array(  $params) ){
                foreach( $params as $pname => $pval){
                    if($pval=='NULL' or $pval==''){
                        $stmt -> bindValue( $pname, null, PDO::PARAM_NULL ); 
                    }
                    else if(is_int($pval)){
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_INT ); 
                    }else{
                       $stmt -> bindValue( $pname, $pval, PDO::PARAM_STR );
                    }
                }

            }
            $stmt -> execute();
        } catch (PDOException $e){
            $errorInfo = $stmt->errorInfo();
        }
        return $id;
    }
    
    function delete($query, $id=''){
        global $dbh;
        try {
            if( $id != ''){
                $dbh -> exec( $query. 'WHERE id='.$id );
            }else{
                $dbh -> exec( $query );
            }
        } catch (PDOException $e){
            var_dump($stmt->errorInfo());
        }
        return $arrRet;
    }
    

?>
