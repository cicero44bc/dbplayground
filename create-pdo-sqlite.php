<?php 
 
	try{
		
		include('connection.php');
		
		/* Create a prepared statement */
		$stmt = $db -> prepare("CREATE TABLE IF NOT EXISTS mytable (id INTEGER PRIMARY KEY, name TEXT);");
		
		/* execute the query */
		if ( $stmt -> execute() )
		{
			echo "Table is created. Let's Insert some values in that <a href='insert-pdo-sqlite.php'>INSERT</a>";
		}
		
		/* close connection */
		$db = null;
	}
	catch (PDOExecption $e){
		echo $e->getMessage();
	}	
	
?>
