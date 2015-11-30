<?php

	require_once '../../../app/info.php';
	require_once '../../../db/connectdb.php';

	if ( $_POST ) {

		$nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
		$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
		$role = htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8');

		$errores = [];

		if ( empty($nickname) ) {

			$errores['errorNickname'] = true;

		}

		if ( empty($password) ) {

			$errores['errorPassword'] = true;

		}

		if ( empty($email) ) {

			$errores['errorMail'] = true;

		}

		if ( empty($errores) ) {

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

			header("Location: .");
			exit();

		}
	}

	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';
?>