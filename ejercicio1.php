<html>
<head>
  <title>Ejercicio1</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
</head>
<body>
  <form name"formulario" method="post" action="ejercicio1.php">
    <p>Nombre <input type="text" name="Nombre" value=""/></p>
    <p><input type="submit"/></p>
  </form>
</body>
<?php
class MiBD extends SQLite3{
	function __construct(){
	$this->open('correos1.db');
	}
}
$bd = new MiBD();
if(!$bd){
echo $bd->lastErrorMsg();
} 
//NOMBRES: Antonio, Sara y Pedro

if(isset($_POST['Nombre'])){
 $Nombre=$_POST['Nombre'];
$result = $bd->query("SELECT * FROM tabla_correos1 where nombre='$Nombre'");
while($row = $result->fetchArray(SQLITE3_ASSOC) ){
	echo "<br>";
	echo "email = ". $row['email'] ."<br>";
	echo "nombre = ". $row['nombre'] ."<br>";
}
}
?>
</html>