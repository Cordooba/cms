<?php

require_once(dirname(dirname(__FILE__)).'/app/info.php');

require_once(dirname(dirname(__FILE__)).'/db/connectdb.php'); 

try {

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sqlAuthor = "CREATE TABLE author (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		nickname 			VARCHAR(50),
		password 			VARCHAR(50),
		email				VARCHAR(50),
		role 				ENUM('admin','editor'),
		createdat 			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		editdat				TIMESTAMP NULL DEFAULT NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlAuthor);

	$sqlCategory = "CREATE TABLE categories (
		id					INT AUTO_INCREMENT PRIMARY KEY,
		name				VARCHAR(50),
		createdat 			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		editdat				TIMESTAMP NULL DEFAULT NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlCategory);

	$sqlTags = "CREATE TABLE tags (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		name				VARCHAR(50),
		createdat 			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		editdat				TIMESTAMP NULL DEFAULT NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlTags);

	$sqlPosts = "CREATE TABLE posts (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		title 				VARCHAR(50),
		excerpt 			VARCHAR(100) NULL,
		id_author			INT, 
		date_pub			TIMESTAMP NULL DEFAULT NULL,
		featured_image		VARCHAR(50) NULL DEFAULT NULL,
		content 			LONGTEXT NOT NULL,
		createdat 			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		editdat				TIMESTAMP NULL DEFAULT NULL,
		state 				SET('draft','published'),
		slug 				VARCHAR(50),
		FOREIGN KEY (id_author) REFERENCES author (id)
		 	ON UPDATE CASCADE
		 	ON DELETE SET NULL	 
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlPosts);

	$sqlComment = "CREATE TABLE comment (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		usser_nick			VARCHAR(50) NOT NULL,
		email_usser			VARCHAR(50) NOT NULL,
		http				VARCHAR(50),
		content				MEDIUMTEXT NOT NULL,
		id_post				INT,
		FOREIGN KEY (id_post) REFERENCES posts (id)
		 	ON UPDATE CASCADE
		 	ON DELETE SET NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlComment);

	$sqlPostsCategory = "CREATE TABLE postscats (
	id_post			INT NOT NULL,
	id_cat 			INT NOT NULL,

	PRIMARY KEY (id_post, id_cat),

	FOREIGN KEY (id_post) REFERENCES posts(id)
		ON UPDATE CASCADE,

	FOREIGN KEY (id_cat) REFERENCES categories(id)
			ON UPDATE CASCADE
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo -> exec($sqlPostsCategory);

	$sqlPostsTags = "CREATE TABLE poststags (
	id_post	INT NOT NULL,
	id_tag	INT NOT NULL,

	PRIMARY KEY (id_post, id_tag),

	FOREIGN KEY (id_post) REFERENCES posts(id)
		ON UPDATE CASCADE,

	FOREIGN KEY (id_tag) REFERENCES tags(id)
		ON UPDATE CASCADE
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";


	$pdo -> exec($sqlPostsTags);
	
} catch (PDOException $e) {
	
	die("No se ha podido crear la tabla 'tasks':". $e->getMessage());

}

?>