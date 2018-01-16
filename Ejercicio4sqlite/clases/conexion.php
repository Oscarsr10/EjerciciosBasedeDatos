<?php
function Conectar(){
	$conn = null;
	$host = 'localhost';
	$db = 'u923011956_libro';
	$user = 'u923011956_admin';
	$pwd = 'libros';
	try {
		$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
	}catch(PDOException $e){
		echo 'Error al conectar con la base de datos '.$e;
		exit;
	}
	return $conn;
}
?>