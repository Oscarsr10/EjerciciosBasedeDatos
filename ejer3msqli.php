<?php 
$mysqli = new mysqli("localhost", "u923011956_root", "almacen", "u923011956_almac"); 
/* comprobar la conexión */ 
if ($mysqli->connect_errno) { 
	printf("Falló la conexión: "); 
	exit();}
if(isset($_REQUEST['nombre'])){
$NOMBRE=$_REQUEST['nombre'];
if($sentencia=$mysqli->prepare("select NOMBRE from CLIENTES where vendedor_no=(select EMP_NO from EMPLEADOS where APELLIDO='$NOMBRE')"));
$sentencia->bind_result($NOMBRE);  
$sentencia->execute(); 
$sentencia->store_result(); 
while($sentencia->fetch())
{
 echo "NOMBRE: ".$NOMBRE. "</br>";

}
} 
?>