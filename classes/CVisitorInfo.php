<?php
	/* A light info class about user visitor. 
	 * 
	 * Author	: Andrzej Domurat < andrzej.domurat@gmail.com >
	 * Date	: 2009-07-18
	 * Website	: http://p4y.pl
	 * Version	: 1.0
	 *
	 * Usage: 
	 *		$info = new CVisitorInfo();
	 *		$info->ip;				//return ip
	 *		$info->hostaddress;		// return adres hosta
	 *		$info->browser; 		// return przegladarke
	 *		$info->referred;			// return skąd kliknięto
	*/
	
	class CVisitorInfo
	{
		
		public $ip;
	
		
		public function __construct()
		{
			$this -> ip = $_SERVER['REMOTE_ADDR'];
			
		}
		
		
		
	}

?>