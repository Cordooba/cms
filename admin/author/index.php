<?php 

	require_once '../../app/info.php';
	require_once '../../db/connectdb.php';

	try {
		
		$sql = "SELECT * FROM author;";

		$ps = $pdo -> prepare($sql);

		$ps -> execute();

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfAuthor [] = $row;

	}
	
	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';

?>