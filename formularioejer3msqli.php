<!DOCTYPE html>
<html>
 <head>
 <meta charset="ISO-8859-1" />
 <meta name="title" content="Ejercicio inicio de sesión" /> 
</head>
 <body background="fondo3.jpg">
 <center>
 <h1>Consultar</h1>
 <form action="ejer3msqli.php" method="post"> 
<label>Nombre:</label>
 <input type="text" name="nombre" /><br />
 <br>
 <input type="submit" value="Enviar" />
<center> 
 </form>
 <br>
 <h1>Insertar</h1>
 <form action="ejer3_2msqli.php" method="post">
<label>Cliente_No:</label>
 <input type="text" name="clienteno" /><br /> 
 <label>Nombre:</label>
 <input type="text" name="nombre" /><br />
 <label>Localidad:</label>
 <input type="text" name="localidad" /><br />
 <label>Vendedor_No:</label>
 <input type="text" name="vendedorno" /><br />
 <label>Debe:</label>
 <input type="text" name="debe" /><br />
 <label>Haber:</label>
 <input type="text" name="haber" /><br />
 <label>Limite_credito:</label>
 <input type="text" name="limitecredito" /><br />
 <br>
 <input type="submit" value="Enviar" name="insertar"/>
</form> 
 <br>
 <h1>Actualizar</h1>
 <form action="ejer3_3msqli.php" method="post"> 
<label>Cliente_No:</label>
 <input type="text" name="clienteno" /><br />
 <label>Nombre:</label>
 <input type="text" name="nombre" /><br />
 <label>Localidad:</label>
 <input type="text" name="localidad" /><br />
 <label>Vendedor_No:</label>
 <input type="text" name="vendedorno" /><br />
 <label>Debe:</label>
 <input type="text" name="debe" /><br />
 <label>Haber:</label>
 <input type="text" name="haber" /><br />
 <label>Limite_credito:</label>
 <input type="text" name="limitecredito" /><br />
 <br>
 <input type="submit" value="Enviar" name="actualizar"/> 
 </form>
 </body>
</html>
