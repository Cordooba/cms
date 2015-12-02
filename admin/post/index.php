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

		require_once 'createpost.html.php';

	}	

	try {

		$sql = "SELECT posts.title, posts.excerpt, posts.date_pub, posts.createdat, author.nickname, 
		posts.state FROM posts LEFT JOIN author ON posts.id_author = author.id;";

		$ps = $pdo -> prepare($sql);

		$ps -> execute();

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfPost [] = $row;

	}
	
	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';

?>