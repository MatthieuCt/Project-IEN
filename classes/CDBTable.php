<?php

class CDBTable{
	
	private $table_name;
	private $pk;
	private $pk_val;
	/**
	 * 
	 * @param $tab_name String
	 * @param $pk ('col_id1');
	 * @return unknown_type
	 */
	function __construct($tab_name, $pk = null){
		$this -> table_name = $tab_name;
		$this -> pk = $pk;
	}
	
	
	/**
	 * Wstawienie nowego rekordu do tabeli
	 * @param $arr - tablica asocjacyjna
	 * @return unknown_type
	 */
	function insertRows($arrRows){
		$sql = 'INSERT INTO '.$this->table_name.' ';
		$sql_columns = '';
		$sql_values = '';
		global $dbh;
		
		if( $this -> pk != null ){
			
			## pobrac id max+1
			$sql_new = 'SELECT COALESCE( GREATEST( MAX('.$this -> pk.')+1, 1 ), 1 ) as new_id FROM '.$this->table_name;
      //echo $sql;
			$stmt = $dbh -> prepare( $sql_new );
			$stmt->execute();
			$arrMenu = $stmt->fetchAll();
			$new_id = $arrMenu[0]['new_id'];
			if( $new_id == "") $new_id = 1;
			$this -> pk_val = $new_id;
			if( !array_key_exists( $this->pk , $arrRows) ){
				$arrRows = array_merge( $arrRows , array( $this->pk => $new_id ));
			}
			//print_r ($arrRows);
		}
		
		if(count( $arrRows ) > 0 ){
			
			
			foreach( $arrRows as $key => $val){
				$sql_columns .= ( $sql_columns == "" ? $key : ', '.$key);
				if( $this -> pk == $key ){
					$sql_values .= ( $sql_values == "" ? $new_id : ', '.$new_id);
				}else{
					if( is_numeric( $val ) ){
						$sql_values .= ( $sql_values == "" ? $val : ', '.$val);
					}else if($val == 'nill'){
            $sql_values .= ( $sql_values == "" ? "null" : ", null");
          }else if($val == 'now()'){
            $sql_values .= ( $sql_values == "" ? "now()" : ", now()");
          }else{
						$sql_values .= ( $sql_values == "" ? "'".$val."'" : ", '".$val."'");
					}
					
				}
			}
		}
		
		$sql .= ' ( '.$sql_columns.' ) VALUES ( '.$sql_values.' );';
		//echo $sql;
		$dbh -> exec ( $sql );
		
		$sql_out = "SELECT * FROM ".$this->table_name." WHERE ".$this->pk."=".$this->pk_val;
		$stmt = $dbh -> prepare( $sql_out );
		$stmt->execute();
		$arr = $stmt->fetchAll();
		return $arr[0];
		
	}
	
	public function nextval(){
		$nextval = 1;
		global $dbh;
		try{
		    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT GREATEST(MAX(".$this->pk.")+1, 1) as _id  FROM ".$this->table_name;
			$stmt = $dbh->prepare($sql);
			$stmt -> execute();
			$arr = $stmt->fetchAll();
			$nextval = $arr[0][0];
		}
		catch(PDOException $e)
		{
			global $log;
		    $log -> LogError( 'Błąd: ' . $e->getMessage() );
		}
		return ( $nextval == "" ? 1 : $nextval );
	}
	
	function lastid(){
           return $this -> pk_val;
        }
	
}

?>