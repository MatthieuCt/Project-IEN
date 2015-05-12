<?php
  # config db
  define('DRIVER', 'mysql');
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PWD', 'root');
  define('DATABASE', 'domurat26');
  # end config db
  
 
  
  try
  {
    global $dbh;
  	$dbh = new PDO(DRIVER.':host='.HOST.';dbname='.DATABASE, USER, PWD);
  	//$dbh -> exec('SET ENCODING utf8;');
  	$dbh -> exec('SET NAMES \'utf8\';');
  	
  }
  catch(PDOException $e)
  {
  	echo 'Błąd:'.$e->getMessage();
  }
  

?>