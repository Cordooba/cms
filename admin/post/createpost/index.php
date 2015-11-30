<?php  

	require_once '../../../app/info.php';
	require_once '../../../db/connectdb.php';

	require_once $base_path.'admin/templates/headercreate.php';
	require_once 'createpost.html.php';

	if ( isset($_POST) ) {

		$title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
		$excerpt = htmlspecialchars($_POST['excerpt'], ENT_QUOTES, 'UTF-8');
		$content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
		$slug = htmlspecialchars($_POST['slug'], ENT_QUOTES, 'UTF-8');
		$featured_image = htmlspecialchars($_POST['featured_image'], ENT_QUOTES, 'UTF-8');
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');

		$errores = [];

		if ( empty($title) ) {

			$errores['errorTittle'] = "El título no puede ser un campo vacío.";

		}

		if ( empty($content) ) {

			$errores['errorContent'] = "El artículo no puede tener contenido vacío.";

		}

		if ( empty($slug) ) {

			$errores['errorSlug'] = "La Url no puede ser un campo vacío.";

		}

		if ( empty($errores) ) {

			try {
				
				$sql = "INSERT INTO posts ( title, excerpt, featured_image, content, state, slug) 
						VALUES ( :title, :excerpt, :featured_image, :content, :status, :slug );";

				$ps = $pdo -> prepare ($sql);

				$ps -> bindValue(':title', $title);
				$ps -> bindValue(':excerpt', $excerpt);
				$ps -> bindValue(':featured_image', $featured_image);
				$ps -> bindValue(':content', $content);
				$ps -> bindValue(':status', $status);
				$ps -> bindValue(':slug', $slug);

				$ps -> execute();

			} catch (PDOException $e) {
				
				die("No se han podido guardar los datos:".$e->getMessage());

			}

			exit();
			
		}
	}

?>