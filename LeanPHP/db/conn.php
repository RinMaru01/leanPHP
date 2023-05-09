<?php

	try {
		$dbhost = 'localhost';
		$dbname='leanmar_employee';
		$user = 'root';
		$pass = '';
		$connect = new PDO(
"mysql:host=$dbhost;dbname=$dbname", $user, $pass);
	}
catch (PDOException $e) {
		echo "Error : " . $e->getMessage() . "<br/>";
		die();
	}
	$count = $connect->exec("DELETE FROM employee WHERE emp_id = 123 ");
	echo("Number of rows to be deleted from the employee table is: ". $count);
?>
