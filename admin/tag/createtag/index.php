<?php

	require_once '../../../app/info.php';
	require_once '../../../db/connectdb.php';

	if ( $_POST ) {

		$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

		$errores = [];

		if ( empty($name) ) {

			$errores['errorName'] = true;

		}

		if ( empty($errores) ) {

			try {
				
				$sql = "INSERT INTO tags (name) VALUES (:name);";

				$ps = $pdo -> prepare($sql);
				$ps -> bindValue(':name', $name);
				$ps -> execute();

			} catch (PDOException $e) {
				
				die("No se ha podido guardar la tarea en la base de datos:". $e->getMessage());

			}

			header("Location: .");
			exit();

		}
	}

	require_once $base_path.'admin/templates/header.php';
	require_once 'createtag.html.php';
?>