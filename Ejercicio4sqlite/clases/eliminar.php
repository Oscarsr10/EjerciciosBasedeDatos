<?php
$idL = $_POST['idL'];
require('conexion.php');
$con = Conectar();
$sql = 'DELETE FROM libro WHERE id=:idLibro';
$q = $con->prepare($sql);
$q->execute(array(':idLibro'=>$idL));
?>