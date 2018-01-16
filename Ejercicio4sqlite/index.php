<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ejercicio4PDO_MYSQL</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Ejercicio4PDO_MYSQL</a>
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>Ejercicio4PDO_MYSQL</h1>
        <p class="lead">Aplicacion gestion de libros</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Nuevo
        </button>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de libros</div>
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titulo</th>
              <th>Autor</th>
            </tr>
          </thead>
          <tbody>
			<?php
			require("clases/conexion.php");
			$con = Conectar();
			$sql = "Select id, titulo, autor from libro";
			$stmt = $con->prepare($sql);
			$result = $stmt->execute();
			$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
			foreach($rows as $row){
			?>
			<tr>
                <td><?php print($row->id);?></td>
                <td><?php print($row->titulo);?></td>
                <td><?php print($row->autor);?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger">Seleccione</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a onclick="Eliminar('<?php print($row->id);?>','<?php print($row->titulo);?>','<?php print($row->autor);?>');">Eliminar</a></li>
                      <li><a onclick="Editar('<?php print($row->id);?>','<?php print($row->titulo);?>','<?php print($row->autor);?>');">Actualizar</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
			<?php
			}
			?>
             </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Libro</h4>
            </div>
            <form role="form" action="" name="frmLibros" onsubmit="Registrar(idL, accion); return false">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Titulo</label>
                  <input name="titulo" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Autor</label>
                  <input name="autor" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-info btn-lg">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Registrar
                </button>

              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	var accion;
	var idL;
		function Nuevo(){
			accion = 'N';
			document.frmLibros.titulo.value = "";
			document.frmLibros.autor.value = "";
			$('#modal').modal('show');
		}
		function Editar(id, titulo, autor){
			accion = 'E';
			idL = id;
			document.frmLibros.titulo.value = titulo;
			document.frmLibros.autor.value = autor;
			$('#modal').modal('show');
		}
	</script>
  </body>
  </html>