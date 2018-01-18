<?php 
 
	try{
 
		include('connection.php'); 
		
		/* Create a prepared statement */
		$stmt = $db -> prepare("SELECT * from mytable");
		
		/* execute the query */
		$stmt -> execute();		
		
		/* fetch all results */
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($res as $row){
			extract($row);
			echo $id." | ".$name."<br>";
		}
				
		/* close connection */
		$db = null;
	}
	catch (PDOExecption $e){
		echo $e->getMessage();
	}	
	
	echo "<br> Search particular row here: <a href='search-pdo-sqlite.php'>SEARCH</a>";
?>
