function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	  try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  } catch (E) {
		xmlhttp = false;
	  }
	
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function Registrar(idL, accion){
	titulo = document.frmLibros.titulo.value;
	autor = document.frmLibros.autor.value;
	ajax = objetoAjax();
	if(accion=='N'){
		ajax.open("POST", "clases/registrar.php", true);
	}else if(accion=='E'){
		ajax.open("POST", "clases/actualizar.php", true);
	}
	ajax.onreadystatechange=function() {
		if (ajax.readyState==2) {
			alert('Los datos fueron registrados');
			window.location.reload(true);
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("titulo="+titulo+"&autor="+autor+"&idL="+idL);
}
function Eliminar(idL){
if(confirm("En realizad desea eliminar este registro?")){
ajax = objetoAjax();
ajax.open("POST", "clases/eliminar.php", true);
ajax.onreadystatechange=function() {
		if (ajax.readyState==2) {
			alert('El registro fue eliminado con exito!');
      window.location.reload(true);
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("idL="+idL)
}else{
  //Sin acciones
}
}