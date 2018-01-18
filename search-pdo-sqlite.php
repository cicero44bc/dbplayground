<html>
<body>
	<form action="" method="post">	
		<label>Seach by Id: </label><input type="text" name="id" />
		<input type="submit" />
	</form>
</body>
<?php 

if( $_POST ){
	
	$id = $_POST[ 'id' ];

	try{
		
		include('connection.php'); 
		
		/* Create a prepared statement */
		$stmt = $db -> prepare("SELECT * from mytable where id = :id");
		
		/* bind param */
		$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
		
		/* execute the query */
		$stmt -> execute();		

		/* fetch all results */		
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		echo "Result: <br>";
		
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

	echo "<br> More tutorials at: <a target='_blank' href='http://www.theonlytutorials.com'>Theonlytutorials.com</a>";
}
?>
