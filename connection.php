<?php 
 
	/* Create / Connection to sqlite using PDO and set error mode */
		$db = new PDO('sqlite:mydb.sqlite3');
	/* end */
	
	/*** if you want to use mysql database then uncomment the below lines and comment the above lines ***/
	/*** but you should create the db manually in the mysql server ***/
	
	/*	$dsn 		= 'mysql:dbname=mydb;host=localhost';
		$user 		= 'root';
		$password 	= '';
 
		$db = new PDO($dsn, $user, $password);
	
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
?>
