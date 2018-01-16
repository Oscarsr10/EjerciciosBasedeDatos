<?php
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
require('conexion.php');
$con = Conectar();
$sql = 'INSERT INTO libro (titulo, autor) VALUES (:titulo, :autor)';
$q = $con->prepare($sql);
$q->execute(array(':titulo'=>$titulo, ':autor'=>$autor));
?>