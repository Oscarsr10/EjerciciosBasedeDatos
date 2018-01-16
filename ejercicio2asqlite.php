<html>
 <head>
 <title>Ejercicio2 - Borrado de tareas</title>
 <style type="text/css">
 div#message {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 width:40%;
 border: solid 2px green
 }
 div#message {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 width:60%;
 border: solid 2px green
 }
 table {
 border-collapse: collapse;
 width: 500px;
 }
 tr.heading {
 font-weight: bolder;
 }
 td {
 border: 1px solid black;
 padding: 1em;
 margin: 10em;
 }
 tr.high {
 background: #cc1111;
 }
 tr.medium {
 background: #00aaaa;
 }
 tr.low {
 background: #66dd33;
 }
 a {
 color: black;
 border: outset 2px black;
 text-decoration: none;
 padding: 3px;
 }
 </style>
 </head>
  <body>
<h2>Lista de tareas a realizar</h2>
 <h3>Elimina la tarea terminada</h3>
<?php
if (isset($_GET['id'])) {
class MiBD extends SQLite3{
	function __construct(){
	$this->open('sqlite.db');
	}
}
$bd = new MiBD();

$id=$_GET['id'];
$ret = $bd->query("DELETE FROM tareas WHERE id = '$id'");
$ret = $bd->query('SELECT id, descripcion, fecha, prioridad FROM tareas where prioridad="Alta"');

while($row = $ret->fetchArray()) {

	echo "<table>\n";
	echo " <tr class=\"heading\">\n";
	echo " <td>Descripcion</td>\n";
	echo " <td>Fecha limite</td>\n";
	echo " <td></td>\n";
	echo " </tr>\n";
	echo "<tr bgcolor='#cc1111'><td>" . $row['descripcion'] . "</td>". "<td>".$row['fecha'] . "</td>"
	."<td>".'<a href="ejercicio2asqlite.php?id='.$row['id'].'" class="buttonize">Marcar como hecho</a>
	'."</td>"."</tr>";

	echo "</table>";
} 
$ret = $bd->query('SELECT id, descripcion, fecha, prioridad FROM tareas where prioridad="Media"');

while($row = $ret->fetchArray()) {

	echo "<table>\n";
	echo " <tr class=\"heading\">\n";
	echo " <td>Descripcion</td>\n";
	echo " <td>Fecha limite</td>\n";
	echo " <td></td>\n";
	echo " </tr>\n";
	echo "<tr bgcolor='#00aaaa'><td>" . $row['descripcion'] . "</td>". "<td>".$row['fecha'] . "</td>"
	."<td>".'<a href="ejercicio2asqlite.php?id='.$row['id'].'" class="buttonize">Marcar como hecho</a>
	'."</td>"."</tr>";
	echo "</table>";
} 
$ret = $bd->query('SELECT id, descripcion, fecha, prioridad FROM tareas where prioridad="Baja"');

while($row = $ret->fetchArray()) {

	echo "<table>\n";
	echo " <tr class=\"heading\">\n";
	echo " <td>Descripcion</td>\n";
	echo " <td>Fecha limite</td>\n";
	echo " <td></td>\n";
	echo " </tr>\n";
	echo "<tr bgcolor='#66dd33'><td>" . $row['descripcion'] . "</td>". "<td>".$row['fecha'] . "</td>"
	."<td>".'<a href="ejercicio2asqlite.php?id='.$row['id'].'" class="buttonize">Marcar como hecho</a>
	'."</td>"."</tr>";

	echo "</table>";
}

$bd->close();
}
?>
<p/> <a href="ejercicio2sqlite.php">Añadir una nueva tarea</a>
 </body>
</html>