function SoloNumeros(evt){
	if(window.event){//asignamos el valor de la tecla a keynum
		keynum = evt.keyCode; //IE
	}else{
		keynum = evt.which; //FF
	} 
	//comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
	if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
		return true;
	}else{
		return false;
	}
}

function cedula(){

	var form=document.form;
	//validamos la cedula
	if(form.cedula.value==null || form.cedula.value==0){
		alert('Ingrese una cedula para el jefe de familia');
		form.cedula.value=="";
		form.cedula.focus();
		return false;
	}
	if(isNaN(form.cedula.value)==true){
		alert('la cedula solo debe de tener valores numéricos');
		form.cedula.value=="";
		form.cedula.focus();
		return false;
	}
	if(form.cedula.value<=-1){
		alert('la cedula no debe de tener valores negativos');
		form.cedula.value=="";
		form.cedula.focus();
		return false;
	}
	if(form.cedula.value.length < 6){
		alert('la cedula debe tener al menos 6 caracteres');
		form.cedula.value=="";
		form.cedula.focus();
		return false;
	}
	if(form.cedula.value.length > 8){
		alert('la cedula debe tener maximo 8 caracteres');
		form.cedula.value=="";
		form.cedula.focus();
		return false;
	}else{

	}
}