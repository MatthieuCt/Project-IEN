<?php
  # config db
  define('DRIVER', 'mysql');
  define('HOST', 'sql.domurat.home.pl');
  define('USER', 'USER');
  define('PWD', 'PASS');
  define('DATABASE', 'DATABASE');
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