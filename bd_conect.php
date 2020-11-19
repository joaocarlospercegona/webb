<?php
	try {
		$dns = "192.168.15.5";
		$user = "sa";
		$pass = "18042000";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}
?>