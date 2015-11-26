<?php 
 
require_once(__ROOT__.'/app/datadb.php');

try{

	$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $usser, $pass);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec('SET NAMES utf8');

}catch(PDOException $e){

	die('Error de conexión a la base de datos: '. $e->getMessage());

}

?>