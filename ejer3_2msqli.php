<?php 
$mysqli = new mysqli("localhost", "u923011956_root", "almacen", "u923011956_almac"); 
/* comprobar la conexión */ 
if ($mysqli->connect_errno) { 
	printf("Falló la conexión: "); 
	exit();}
if(isset($_POST['insertar'])){
$clienteno=$_POST['clienteno'];	
$nombre=$_POST['nombre'];
$localidad=$_POST['localidad'];
$vendedorno=$_POST['vendedorno'];
$debe=$_POST['debe'];
$haber=$_POST['haber'];
$limitecredito=$_POST['limitecredito'];
$sentencia = $mysqli->prepare("insert into CLIENTES (CLIENTE_NO,NOMBRE,LOCALIDAD,VENDEDOR_NO,DEBE,HABER,LIMITE_CREDITO)
values(?,?,?,?,?,?,?)");
$sentencia->bind_param('issiiii',$clienteno, $nombre, $localidad, $vendedorno, $debe, $haber, $limitecredito); 

if($sentencia->execute()){
    print 'Success! '; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
$sentencia->close();
$mysqli->close();
} 
?>