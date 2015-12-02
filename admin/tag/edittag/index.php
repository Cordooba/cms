<?php 

	require_once '../../../app/info.php';
	require_once '../../../db/connectdb.php';

	require_once $base_path.'admin/templates/header.php';

	if ( isset($_POST['id']) ) {

		$id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');

	try {

			$sql = "SELECT id, name FROM tags WHERE id = :id";

			$ps = $pdo->prepare($sql);

			$ps->bindValue(':id', $id);

			$ps->execute();

	} catch (PDOException $e) {

			die("Error en la base de datos: ". $e->getMessage() );

	}
	//Solo obtendremos un solo resultado
	$tag = $ps -> fetch(PDO::FETCH_ASSOC); 

	}

	if ( isset($_GET['updateTag']) ) {

		$id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
		$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

		try {
			
			$sql = "UPDATE tags SET name = :name WHERE id = :id";

			$ps = $pdo->prepare($sql);

			$ps->bindValue(':id', $id);
			
			$ps->bindValue(':name', $name);

			$ps->execute();

		} catch (Exception $e) {
			
			die("Error en la base de datos: ". $e->getMessage() );

		}

		header('Location:'.$base_admin_path);

	}

	require_once $base_path.'admin/templates/header.php';
	require_once 'main.html.php';

?>