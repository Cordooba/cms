<?php 
	
	require_once '../../app/info.php';
	require_once '../../db/connectdb.php';

	if (isset($_GET['edit'])) {
		// Muestro la vista para editar la categoría

	}

	if (isset($_GET['delete'])) {
		// Borrar la categoría
		
	}

	if ( isset($_GET['add']) ) {

		$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

		try {
				
			$sql = "INSERT INTO categories (name) VALUES (:name);";

			$ps = $pdo -> prepare($sql);
			$ps -> bindValue(':name', $name);
			$ps -> execute();

			} catch (PDOException $e) {
				
				die("No se ha podido guardar la tarea en la base de datos:". $e->getMessage());

			}

	}

	try {

		$sql = "SELECT * FROM categories;";

		$ps = $pdo -> prepare($sql);

		$ps -> execute();
		
	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfCategories [] = $row;

	}
	
	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';

?>