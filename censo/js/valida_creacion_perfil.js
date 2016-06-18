function Valida_perfil(){
	
	var form=document.form;

	if(form.nombre.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Debe introducir un nombre para el nuevo usuario.&nbsp;&nbsp;&times;</strong></p>";
		form.nombre.value=" ";
		form.nombre.focus();
		return false;
	}

	if(form.cedula.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Debe introducir la cedula del usuario.&nbsp;&nbsp;&times;</strong></p>";
		form.cedula.value=" ";
		form.cedula.focus();
		return false;
	}
  	re = /[0-9]/;
    if(!re.test(form.cedula.value)) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las cedula debe contener solo números.&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
    }
    if(form.cedula.value.length < 6) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las cedula debe contener al menos 6 números.&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
    }
	if(form.password.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Debe introducir una contraseña para el nuevo usuario.&nbsp;&nbsp;&times;</strong></p>";
		form.password.value=" ";
		form.password.focus();
		return false;
	}
	if(form.tipo_rol.value==0){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Debe indicar el tipo de usuario.&nbsp;&nbsp;&times;</strong></p>";
		form.tipo_rol.value=" ";
		form.tipo_rol.focus();
		return false;
	}
	if(form.password.value!=form.password2.value){
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas son diferentes.&nbsp;&nbsp;&times;</strong></p>";
		return false;
	}
    if(form.password.value == form.nombre.value) {
		document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe ser diferente del nombre de usuario.&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
    re = /[0-9]/;
    if(!re.test(form.password.value)) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos un número (0-9).&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
    re = /[a-z]/;
    if(!re.test(form.password.value)) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos una letra minuscula [a-z].&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
     re = /[!-?]/;
    if(!re.test(form.password.value)) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos una letra minuscula [a-z].&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
    re = /[A-Z]/;
    if(!re.test(form.password.value)) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos una letra mayuscula [A-Z].&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
	}
	if(form.password.value.length < 6) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos 6 letras.&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
	if(form.password.value.length > 15) {
    	document.getElementById("mensaje_error").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Las contraseñas debe contener al menos 15 letras.&nbsp;&nbsp;&times;</strong></p>";
        form.password.focus();
        return false;
      }
	form.submit();
}

/***************************************************************************************************/
/*funcion que valida la modificación del perfil*/
function Modifica_datos_perfil(){
	var formu=document.formu;

	if(formu.nameuser.value==0){
		//document.getElementById("error").innerHTML="Indique un nombre de usuario.";
		alert('Indique un nombre de usuario.');
		formu.nameuser.value=" ";
		formu.nameuser.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}

	if(formu.ceduser.value==0){
		//document.getElementById("error").innerHTML="Indique un nombre de usuario.";
		alert('Indique una cedula de identidad.');
		formu.ceduser.value=" ";
		formu.ceduser.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}
	re = /[0-9]/;
    if(!re.test(formu.ceduser.value)) {
    	alert('La cedula solo debe contener números');
		formu.ceduser.value=" ";
		formu.ceduser.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}
	if(formu.ceduser.value.length < 6) {
	    alert('La cedula debe contener mínimo 6 dígitos');
		formu.ceduser.value=" ";
		formu.ceduser.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}
	if(formu.claveactual.value==0){
		//document.getElementById("error").innerHTML="Indique un nombre de usuario.";
		alert('Indique la contraseña actual para efectuar la operación.');
		formu.claveactual.value=" ";
		formu.claveactual.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}

	formu.submit();
}

/*FUNCION QUE VALIDA LA MODIFICACIÓN DE CLAVES DE PERFIL*/
function Modifica_claves_perfil(){
	var formu2=document.formu2;

	if(formu2.claveactualp.value==0){
		//document.getElementById("error").innerHTML="Indique un nombre de usuario.";
		alert('Indique la contraseña actual para efectuar la operación.');
		formu2.claveactualp.value="";
		formu2.claveactualp.focus();
		return false;
	}else{
		document.getElementById("error").innerHTML="";
	}

	if(formu2.clavenew.value==0)
	{
		alert('Ingrese la nueva contraseña.');
		formu2.clavenew.value="";
		formu2.clavenew.focus();
		return false;

	}
	if(formu2.clavenew2.value==0)
	{
		alert('Confirme la nueva contraseña.');
		formu2.clavenew2.value="";
		formu2.clavenew2.focus();
		return false;

	}
	if(formu2.clavenew.value != formu2.clavenew2.value)
	{
		alert('Las contraseñas no coinciden.');
		formu2.clavenew.value="";
		formu2.clavenew2.value="";
		formu2.clavenew.focus();
		return false;

	}
	else
	{
		document.getElementById("mensaje-error").innerHTML="";
	}


	formu2.submit();
}

/***************************************************************************************************/
/*funcion que valida la modificación del perfil*/
function Modifica_datos_perfil_seleccionado(){
	var form=document.formusel;

	if(form.newname.value==0){
		document.getElementById("error_campos").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique un nombre de usuario.&nbsp;&nbsp;&times;</strong></p>";
		//alert('Indique un nombre de usuario.');
		form.newname.value=" ";
		form.newname.focus();
		return false;
	}else{
		document.getElementById("error_campos").innerHTML="";
	}

	if(form.newced.value==0){
		document.getElementById("error_campos").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique una cedula.&nbsp;&nbsp;&times;</strong></p>";
		//alert('Indique una cedula de identidad.');
		form.newced.value=" ";
		form.newced.focus();
		return false;
	}else{
		document.getElementById("error_campos").innerHTML="";
	}

	if(form.newpass.value==0){
		document.getElementById("error_campos").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique una contraseña.&nbsp;&nbsp;&times;</strong></p>";
		//alert('Indique la contraseña actual para efectuar la operación.');
		form.newpass.value=" ";
		form.newpass.focus();
		return false;
	}else{
		document.getElementById("error_campos").innerHTML="";
	}

	if(form.newrol.value==0){
		document.getElementById("error_campos").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique un rol para el usuario.&nbsp;&nbsp;&times;</strong></p>";
		//alert('Indique un rol para el usuario.');
		form.newrol.value=" ";
		form.newrol.focus();
		return false;
	}else{
		document.getElementById("error_campos").innerHTML="";
	}

	if(form.newestado_user.value==0){
		document.getElementById("error_campos").innerHTML="<p class='alert alert-danger' class='close' data-dismiss='alert' aria-hidden='true'><strong>Indique un estado para el perfil del usuario.&nbsp;&nbsp;&times;</strong></p>";
		//alert('Indique un estado para el usuario.');
		form.newestado_user.value=" ";
		form.newestado_user.focus();
		return false;
	}else{
		document.getElementById("error_campos").innerHTML="";
	}


	form.submit();
}