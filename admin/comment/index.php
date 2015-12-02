<?php 

	require_once '../../app/info.php';
	require_once '../../db/connectdb.php';

	try {
		
		$sql = "SELECT comment.usser_nick, comment.email_usser, comment.content, posts.title FROM comment JOIN posts ON comment.id_post = posts.id;";

		$ps = $pdo -> prepare($sql);

		$ps -> execute();

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfComments [] = $row;

	}

	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';

?>