//una funcion para confirmar la eliminacion de los registros de la tabla de comentarios
function eliminar(url){//le pasamos un parametro el cual va a ser la url
	if(confirm("¿Desea eliminar realmente esta noticia?")){
		window.location=url;
	}

}
//FUNCION PARA LIMPIAR EL FORM 
function Limpiar_Form(){
	document.form.reset();
	document.form.titulo_noticia.focus();
}

function Validar_Noticia(){

	var form=document.form;

	/*if(form.imagen_noticia.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Se necesíta una imagen para la notícia.&nbsp;&nbsp;&times;</strong></p>";
		//lert('');
		form.imagen_noticia.values="";
		form.imagen_noticia.focus();
		return false;
	}*/

	if(form.titulo_noticia.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Se necesita un título para la notícia&nbsp;&nbsp;&times;</strong></p>";
		form.titulo_noticia.values="";
		form.titulo_noticia.focus();
		return false;
	}

	if(form.fecha_noticia.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique una fecha para la notícia&nbsp;&nbsp;&times;</strong></p>";
		form.fecha_noticia.values="";
		form.fecha_noticia.focus();
		return false;
	}

	if(form.descrip_noticia.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Agregue una descripción para la notícia&nbsp;&nbsp;&times;</strong></p>";
		form.descrip_noticia.values="";
		form.descrip_noticia.focus();
		return false;
	}

	if(form.categoria_noticia.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique una categoría para la notícia&nbsp;&nbsp;&times;</strong></p>";
		form.categoria_noticia.values="";
		form.categoria_noticia.focus();
		return false;
	}

	form.submit();
}