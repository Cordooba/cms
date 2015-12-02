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

		$nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
		$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
		$role = htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8');

		try {
				
			$sql = "INSERT INTO author (nickname, password, email, role) VALUES (:nickname, :password, :email, :role);";

			$ps = $pdo -> prepare($sql);

			$ps -> bindValue(':nickname', $nickname);
			$ps -> bindValue(':password', $password);
			$ps -> bindValue(':email', $email);
			$ps -> bindValue(':role', $role);

			$ps -> execute();

			} catch (PDOException $e) {
				
				die("No se ha podido guardar la tarea en la base de datos:". $e->getMessage());

			}

	}

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