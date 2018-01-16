<?php
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$idL = $_POST['idL'];
require('conexion.php');
$con = Conectar();
$sql = 'UPDATE libro SET titulo=:titulo, autor=:autor WHERE id=:idLibro';
$q = $con->prepare($sql);
$q->execute(array(':titulo'=>$titulo, ':autor'=>$autor, ':idLibro'=>$idL));
?>