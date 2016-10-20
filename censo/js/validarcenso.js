
//FUNCION QUE VALIDA ELCORREO DEL COMENT DEL POST
function Validar_correo(email){
	if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
		return (true)
	}else{
		return (false);
	}

}
function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function Validar_censo(){

	var form=document.form;
	//validamos los datos del formulario del censo
	//validamos la cedula
	if(form.ci.value==null || form.ci.value==0){
		alert('Ingrese una cedula para el jefe de familia');
		form.ci.value=="";
		form.ci.focus();
		return false;
	}else if(isNaN(form.ci.value)==true){
		alert('la cedula solo debe de tener valores numéricos');
		form.ci.value=="";
		form.ci.focus();
		return false;
	}else if(form.ci.value<=-1){
		alert('la cedula no debe de tener valores negativos');
		form.ci.value=="";
		form.ci.focus();
		return false;
	}else if(form.ci.value.length < 6){
		alert('la cedula debe tener al menos 6 caracteres');
		form.ci.value=="";
		form.ci.focus();
		return false;
	}else if(form.ci.value.length > 8){
		alert('la cedula debe tener maximo 8 caracteres');
		form.ci.value=="";
		form.ci.focus();
		return false;
	}else{

	}
	//Validamos el nombre

	if(form.name.value.length < 3) {
		alert('EL nombre debe tener al menos 3 caracteres.');
        form.name.focus();
        return false;
    }
    if(form.name.value.length > 30) {
    	alert('El nombre debe tener maximo 30 caracteres.');
        form.name.focus();
        return false;
    }	
	if(form.name.value == null || form.name.value.length == 0 || /^\s+$/.test(form.name.value) ) {
	  	alert('Ingresa un nombre para el jefe de familia.');
		form.name.value=" ";
		form.name.focus();
	  return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el apellido

	if(form.name.value.length < 3) {
		alert('El apellido debe tener minímo 3 caracteres.');
        form.name.focus();
        return false;
    }
    if(form.name.value.length > 30) {
    	alert('El apellido debe tener maximo 30 caracteres.');
        form.name.focus();
        return false;
    }
	if(form.ape.value == null || form.ape.value.length == 0 || /^\s+$/.test(form.ape.value)){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingresa un apellido para el jefe de familia.');
		form.ape.value=" ";
		form.ape.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la fecha
	if(form.fnac.value==null || form.fnac.value==0 || !isNaN(form.fnac.value)){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingresa un fecha de nacimiento para el jefe de familia.');
		form.fnac.value=" ";
		form.fnac.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la edad
	if(form.edad.value==null || form.edad.value==0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingresa un edad para el jefe de familia.');
		form.edad.value=" ";
		form.edad.focus();
		return false;
	}else if(isNaN(form.edad.value)==true){
		alert('La edad solo debe de contener valores numéricos');
		form.edad.value=" ";
		form.edad.focus();
		return false;
	}else if(form.edad.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('La edad no puede contener valores negativos');
		form.edad.value=" ";
		form.edad.focus();
		return false;
	}else if(form.edad.value>=150){
		alert('`La edad supera el limite.');
		form.edad.value=" ";
		form.edad.focus();
		return false;
	}else{

	}

	//validamos la nacionalidad
	if(form.nac.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingresa un nacionalidad para el jefe de familia.');
		form.nac.value=" ";
		form.nac.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el edo civil
	
	if(form.edocivil.value ==0 || form.edocivil.value == null){
		//document.getElementById("mensaje_error").innerHTML=".";
		alert('Ingresa un estado civil para el jefe de familia.');
		form.edocivil.value=" ";
		form.edocivil.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la inscripcion en el CNE
	if(form.cne_f.value==null || form.cne_f.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si el jefe de familia está inscrito en el CNE.');
		form.cne_f.value=" ";
		form.cne_f.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}


	//if( !(/^\d{4}-\d{3}\d{4}$/.test(form.telfcel.value))) {
  	//	alert('Ingrese un numero celular para el jefe de familia\n Ejemplo(0426-5555555).');
	//	form.telfcel.value=" ";
	//	form.telfcel.focus();
	//	return false;
	//}else{
	//
	//}

	//validamos el email
	//if(form.email.value==null)
	//{
		//document.getElementById("mensaje_error").innerHTML="";
	//	alert('Indique un correo electronico para el jefe de familia.');
	//	form.email.value="";
	//	form.email.focus();
	//	return false;
	//}else
	//{
		//document.getElementById("mensaje_error").innerHTML="";
	//}
	//if(Validar_correo(form.email.value)==false)
	//{
		//document.getElementById("mensaje_error").innerHTML=".";
	//	alert('El email del jefe de familia no es valido.');
	//	form.email.value="";
	//	form.email.focus();
	//	return false;
	//}else
	//{
		//document.getElementById("mensaje_error").innerHTML="";
	//}

	//validamos el sexo
	if(form.sexo.value == 0 || form.sexo.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el sexo del jefe de familia.');
		form.sexo.value=" ";
		form.sexo.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el embarazo
	
	if(form.embarazo.value == 0 || form.embarazo.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si hay embarazo');
		form.embarazo.value=" ";
		form.embarazo.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si esta incapacitado
	if(form.disc.value==null || form.disc.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si esta incapacitado');
		form.disc.value=" ";
		form.disc.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de discapacidad
	/*if(form.tipodisc.value==null || form.tipodisc.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de discapacidad');
		form.tipodisc.value=" ";
		form.tipodisc.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/

	//validamos si es pensionado_familiar1
	if(form.pens.value==null || form.pens.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si esta pensionado el jefe de familia.');
		form.pens.value=" ";
		form.pens.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si es pensionado_familiar1
	/*if(form.inst.value==null || form.inst.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la institución.');
		form.inst.value=" ";
		form.inst.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/


	//validamos si trabaja
	if(form.trabaja.value==null || form.trabaja.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si trabaja el jefe de familia.');
		form.trabaja.value=" ";
		form.trabaja.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de ingreso
	if(form.tipoing.value==null || form.tipoing.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de ingreso del jefe de familia.');
		form.tipoing.value=" ";
		form.tipoing.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el ing mensual
	if(form.ingmens.value==null || form.ingmens.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el ingreso mensual del jefe de familia.');
		form.ingmens.value=" ";
		form.ingmens.focus();
		return false;
	}else if(isNaN(form.ingmens.value)==true)
	{
		alert('El ingreso solo debe de ser expresado en números.');
		form.ingmens.value=" ";
		form.ingmens.focus();
		return false;
	}else if(form.ingmens.value >=100000000000){
		alert('Por favor ingrese una cifra razonable.');
		form.ingmens.value=" ";
		form.ingmens.focus();
		return false;
	}

	//validamos el nivel de instrucción
	if(form.nivinstruc.value==null || form.nivinstruc.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el nivel de instrucción del jefe de familia.');
		form.nivinstruc.value=" ";
		form.nivinstruc.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la profesion
	if(form.profesion.value==null || form.profesion.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la profesión del jefe de familia.');
		form.profesion.value=" ";
		form.profesion.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//AHORA VALIDAMOS LOS DATOS DE LOS MIEMBROS DE LA FAMILIA

/*////////////////////////////////////////////////////////////////////////*/
/*VALIDACION DE LOS DATOS DE LOS FAMILIARES*/
/*
	//validamos el primer nombre y apellido
	if(form.nameyape_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el primer nombre y apellido del miembro familiar.');
		form.nameyape_familiar1.value=" ";
		form.nameyape_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cedula
	if(form.ced_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la cedula del miembro familiar.');
		form.ced_familiar1.value=" ";
		form.ced_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la fecha de nacimiento
	if(form.fnac_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la fecha de nacimiento del miembro familiar.');
		form.fnac_familiar1.value=" ";
		form.fnac_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la edad
	if(form.edad_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la edad del miembro familiar.');
		form.edad_familiar1.value=" ";
		form.edad_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si esta discapacitado
	if(form.discap_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si hay o no alguna discapacidad del miembro familiar.');
		form.discap_familiar1.value=" ";
		form.discap_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si existe embarazo 
	if(form.embarazo_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si hay o no embarazo del miembro familiar.');
		form.embarazo_familiar1.value=" ";
		form.embarazo_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el parentesco
	if(form.parentesco_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de parentesco asociado al miembro familiar.');
		form.parentesco_familiar1.value=" ";
		form.parentesco_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el grado de instruccion
	if(form.gradoinst_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el grado de instrucción del miembro familiar.');
		form.gradoinst_familiar1.value=" ";
		form.gradoinst_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si esta inscrito en el CNE
	if(form.cne_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si el miembro familiar esta inscrito en el CNE.');
		form.cne_familiar1.value=" ";
		form.cne_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la profesion
	if(form.profesion_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la profesión del miembro familiar.');
		form.profesion_familiar1.value=" ";
		form.profesion_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si esta pensionado
	if(form.pensionado_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si esta o no pensionado el miembro familiar.');
		form.pensionado_familiar1.value=" ";
		form.pensionado_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el ingreso
	if(form.ingrmensual_familiar1.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el ingreso mensual del miembro familiar.');
		form.ingrmensual_familiar1.value=" ";
		form.ingrmensual_familiar1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}
*/

/*////////////////////////////////////////////////////////////////////////*/
	//SEGUIMOS CON LOS DEMAS DATOS DEL JEFE FAMILIAR//

	//validamos donde trabaja
	/*if(form.donde_trabaja.value==null || form.donde_trabaja.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique donde trabaja.');
		form.donde_trabaja.value=" ";
		form.donde_trabaja.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}
	*/

	//validamos si realiza alguna actividad economica
	if(form.act_economica.value == 0 || form.act_economica.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si realiza alguna actividad economica.');
		form.act_economica.value=" ";
		form.act_economica.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el ingreso familiar
	/*if(form.ing_familiar.value==null || form.ing_familiar.value == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el ingreso familiar.');
		form.ing_familiar.value=" ";
		form.ing_familiar.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/

/*/////////////////////////////////////////////////////////////////////////////////////////////*/
	//SITUACION DE VIVIENDA

	//validamos la condicion de la vivienda
	if(form.condc_terreno.value ==0 || form.condc_terreno.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la condición del terreno.');
		form.condc_terreno.value=" ";
		form.condc_terreno.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la tenencia
	if(form.tenencia_casa.value ==0 || form.tenencia_casa.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la tenencia de la casa.');
		form.tenencia_casa.value=" ";
		form.tenencia_casa.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de vivienda
	if(form.tipo_vivienda.value ==0 || form.tipo_vivienda.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de vivienda.');
		form.tipo_vivienda.value=" ";
		form.tipo_vivienda.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos los tipos de habiatciones
	if(form.habitaciones.value ==0 || form.habitaciones.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de habitaciones.');
		form.habitaciones.value=" ";
		form.habitaciones.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el numero de habitaciones
	if(form.num_habitaciones.value==null || form.num_habitaciones.value==0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el numero de habitaciones de la vivienda.');
		form.num_habitaciones.value=" ";
		form.num_habitaciones.focus();
		return false;
	}else if(isNaN(form.num_habitaciones.value)==true){
		alert('el campo N° de Habitaciones solo debe llevar campos numéricos.');
		form.num_habitaciones.value=" ";
		form.num_habitaciones.focus();
		return false;
	}else if(form.num_habitaciones.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo N° de Habitaciones no puede contener valores negativos');
		form.num_habitaciones.value=" ";
		form.num_habitaciones.focus();
		return false;
	}else{

	}

	//validamos si el terreno es propio
	if(form.ocv.value ==0 || form.ocv.value == null || form.ocv.value == " "){
		//document.getElementById("mensaje_error").innerHTML=".";
		alert('Indique si pertenece a una OCV.');
		form.ocv.value="";
		form.ocv.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si el terreno es propio
	if(form.terreno_propio.value==null || form.terreno_propio.value == 0 || form.terreno_propio.value == " "){
		//document.getElementById("mensaje_error").innerHTML=".";
		alert('Indique si el terreno es propio.');
		form.terreno_propio.value="";
		form.terreno_propio.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de paredes
	if(form.tipo_paredes.value==null || form.tipo_paredes.value == 0 || form.tipo_paredes.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de paredes.');
		form.tipo_paredes.value=" ";
		form.tipo_paredes.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de techo
	if(form.tipo_techo.value==null || form.tipo_techo.value == 0 || form.tipo_techo.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de techo.');
		form.tipo_techo.value=" ";
		form.tipo_techo.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el SIVIH
	if(form.SIVIH.value==null || form.SIVIH.value == 0 || form.SIVIH.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si pertenece al SIVIH.');
		form.SIVIH.value=" ";
		form.SIVIH.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la LPH
	if(form.ley_phab.value==null || form.ley_phab.value == 0 || form.ley_phab.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee L.P.H.');
		form.ley_phab.value=" ";
		form.ley_phab.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos los enseres de la vivienda
	if(form.enseres_vivienda.value==null || form.enseres_vivienda.value == null || form.enseres_vivienda.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique los enseres de la vivienda.');
		form.enseres_vivienda.value=" ";
		form.enseres_vivienda.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la salubridad
	if(form.salubridad_vivienda.value==null || form.salubridad_vivienda.value == 0 || form.salubridad_vivienda.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el estado de salubridad en la vivienda.');
		form.salubridad_vivienda.value=" ";
		form.salubridad_vivienda.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el tipo de ayuda para la casa
	if (form.tipo_ayuda_casa.options[form.tipo_ayuda_casa.selectedIndex].value == "0"){
		alert("Por favor, seleccione una opción del tipo de ayuda para su casa");
		form.tipo_ayuda_casa.focus(); return true;
    }
	//validamos la descripcion del tipo de ayuda
	/*if(form.descrip_ayuda_casa.value == null || form.descrip_ayuda_casa.value == " "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Describa el tipo de ayuda para su vivienda.| Sino necesita ayuda coloque: ninguna.');
		form.descrip_ayuda_casa.value=" ";
		form.descrip_ayuda_casa.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}
	*/

	//validamos la presencia de plaga
	if (form.plagas.options[form.plagas.selectedIndex].value == "0"){
		alert("Por favor, seleccione una opción si presenta o no roedores o insectos en su vivienda");
		form.plagas.focus(); return true;
    }

	//validamos si posee animales
	if (form.animales_domst.options[form.animales_domst.selectedIndex].value == "0"){
		alert("Por favor, seleccione una opción si posee o no animales en su vivienda");
		form.animales_domst.focus(); return true;
    }
	//validamos si hay personas con enfermedad
	if(form.pers_enfermedades.value ==0 || form.pers_enfermedades.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee personas con enfermedades.');
		form.pers_enfermedades.value=" ";
		form.pers_enfermedades.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si existe alguna otra enefermedad
	if(form.otra_enfermedad.value ==0 || form.otra_enfermedad.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee otra enfermedad.');
		form.otra_enfermedad.value=" ";
		form.otra_enfermedad.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si necesita ayuda el enfermo
	if(form.ayuda_enfermo.value ==0 || form.ayuda_enfermo.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si necesita ayuda el enfermo.');
		form.ayuda_enfermo.value=" ";
		form.ayuda_enfermo.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	/*//validamos el tipo de aydua
	if(form.tipo_ayuda_enfermo.value==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de ayuda para el enfermo.');
		form.tipo_ayuda_enfermo.value=" ";
		form.tipo_ayuda_enfermo.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/

	//validamos si hay personas en exclusion
	if(form.pers_exclusion.value ==0 || form.pers_exclusion.value == null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee personas en exclusión.');
		form.pers_exclusion.value=" ";
		form.pers_exclusion.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cantidad de personas en exclusion
	/*if(isNaN(form.cant_exclusion.value)==true){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('La cantidad de personas en exclusión solo debe de ser expresada en números.');
		form.cant_exclusion.value=" ";
		form.cant_exclusion.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/

	//validamos el tipo de aguas blancas
	if(form.aguas_blancas.value ==0 || form.aguas_blancas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de aguas blancas.');
		form.aguas_blancas.value=" ";
		form.aguas_blancas.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si posee tanque
	if(form.posee_tanque.value ==0 || form.posee_tanque.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee tanque.');
		form.posee_tanque.value=" ";
		form.posee_tanque.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}


//validamos los litros del tanque
	if(form.litros_tanque.value ==" " || form.litros_tanque.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la cantidad de litros del tanque.');
		form.litros_tanque.value=" ";
		form.litros_tanque.focus();
		return false;
	}else if(isNaN(form.litros_tanque.value)==true){
		alert('el campo Tanque/Litros debe contener solo valores numéricos.');
		form.litros_tanque.value=" ";
		form.litros_tanque.focus();
		return false;
	}else if(form.litros_tanque.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo Tanque/Litros no puede contener valores negativos');
		form.litros_tanque.value=" ";
		form.litros_tanque.focus();
		return false;
	}else{
		//
	}

	//validamos si posee_pipotes
	if(form.posee_pipotes.value ==0 || form.posee_pipotes.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee pipotes.');
		form.posee_pipotes.value=" ";
		form.posee_pipotes.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cant_pipotes
	if(form.cant_pipotes.value ==" " || form.cant_pipotes.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la cantidad de pipotes.');
		form.cant_pipotes.value=" ";
		form.cant_pipotes.focus();
		return false;
	}else if(isNaN(form.cant_pipotes.value)==true){
		alert('el campo Cant.Pipotes debe contener solo valores numéricos.');
		form.cant_pipotes.value=" ";
		form.cant_pipotes.focus();
		return false;
	}else if(form.cant_pipotes.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo Cant.Pipotes no puede contener valores negativos');
		form.cant_pipotes.value=" ";
		form.cant_pipotes.focus();
		return false;
	}else{
		//
	}

	//validamos si posee_medidor
	if(form.posee_medidor.value ==0 || form.posee_medidor.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee medidor.');
		form.posee_medidor.value=" ";
		form.posee_medidor.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si posee aguas_servidas
	if(form.aguas_servidas.value ==0 || form.aguas_servidas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de aguas servidas.');
		form.aguas_servidas.value=" ";
		form.aguas_servidas.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si posee gas
	if(form.gas.value ==0 || form.gas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee GAS.');
		form.gas.value=" ";
		form.gas.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el proveedor_gas
	if(form.proveedor_gas.value ==" " || form.proveedor_gas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el proveedor del gas.');
		form.proveedor_gas.value=" ";
		form.proveedor_gas.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cant_cilindros
	if(form.cant_cilindros.value ==" " || form.cant_cilindros.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la cantidad de cilindros del gas.');
		form.cant_cilindros.value=" ";
		form.cant_cilindros.focus();
		return false;
	}else if(isNaN(form.cant_cilindros.value)==true){
		alert('el campo cantidad de cilindros debe contener solo valores numéricos.');
		form.cant_cilindros.value=" ";
		form.cant_cilindros.focus();
		return false;
	}else if(form.cant_cilindros.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo cantidad de cilindros no puede contener valores negativos');
		form.cant_cilindros.value=" ";
		form.cant_cilindros.focus();
		return false;
	}else{
		//
	}

	//validamos la duración_gas
	if(form.duración_gas.value ==" " || form.duración_gas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la duración del gas.');
		form.duración_gas.value=" ";
		form.duración_gas.focus();
		return false;
	}else if(isNaN(form.duración_gas.value)==true){
		alert('el campo Duración/Gas debe contener solo valores numéricos.');
		form.duración_gas.value=" ";
		form.duración_gas.focus();
		return false;
	}else if(form.duración_gas.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo Duración/Gas no puede contener valores negativos');
		form.duración_gas.value=" ";
		form.duración_gas.focus();
		return false;
	}else{
		//
	}

	//validamos el precio_gas
	if(form.precio_gas.value ==" " || form.precio_gas.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el precio del gas.');
		form.precio_gas.value=" ";
		form.precio_gas.focus();
		return false;
	}else if(isNaN(form.precio_gas.value)==true){
		alert('el campo Precio/Gas debe contener solo valores numéricos.');
		form.precio_gas.value=" ";
		form.precio_gas.focus();
		return false;
	}else if(form.precio_gas.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo Precio/Gas no puede contener valores negativos');
		form.precio_gas.value=" ";
		form.precio_gas.focus();
		return false;
	}else{
		//
	}

	//validamos el sist_electrico
	if(form.sist_electrico.value ==0 || form.sist_electrico.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de sistema electrico.');
		form.sist_electrico.value=" ";
		form.sist_electrico.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si posee medidor_electrico
	if(form.medidor_electrico.value ==0 || form.medidor_electrico.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee medidor electrico.');
		form.medidor_electrico.value=" ";
		form.medidor_electrico.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si posee bombillos_ahorradores
	if(form.bombillos_ahorradores.value ==0 || form.bombillos_ahorradores.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si posee bombillos ahorradores.');
		form.bombillos_ahorradores.value=" ";
		form.bombillos_ahorradores.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cant_bombillos que necesita
	if(form.cant_bombillos.value ==" " || form.cant_bombillos.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique la cantidad de bombillos ahorradores que necesita.');
		form.cant_bombillos.value=" ";
		form.cant_bombillos.focus();
		return false;
	}else if(isNaN(form.cant_bombillos.value)==true){
		alert('el campo Cuantos (Bombillos Ahorradores Necesita) debe contener solo valores numéricos.');
		form.cant_bombillos.value=" ";
		form.cant_bombillos.focus();
		return false;
	}else if(form.cant_bombillos.value<=-1)
	{
		//document.getElementById("mensaje_error").innerHTML="";
		alert('el campo (Cuantos Bombillos Ahorradores Necesita) no puede contener valores negativos');
		form.cant_bombillos.value=" ";
		form.cant_bombillos.focus();
		return false;
	}else{
		//
	}

	//validamos la recoleccion_basura
	if(form.recoleccion_basura.value ==0 || form.recoleccion_basura.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de recolección de basura.');
		form.recoleccion_basura.value=" ";
		form.recoleccion_basura.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la telefonia
	if(form.telefonia.value ==0 || form.telefonia.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el tipo de servicio telefónico.');
		form.telefonia.value=" ";
		form.telefonia.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el medio de transporte
	if(form.transporte.value ==0 || form.transporte.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el medio de transporte.');
		form.transporte.value=" ";
		form.transporte.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el mecan_informacion
	if(form.mecan_informacion.value ==0 || form.mecan_informacion.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el medio información.');
		form.mecan_informacion.value=" ";
		form.mecan_informacion.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos los serv_comunales
	if(form.serv_comunales.value ==0 || form.serv_comunales.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique los servicios comunales.');
		form.serv_comunales.value=" ";
		form.serv_comunales.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//AHORA VALIDAMOS LA Partcipación comunitaria

	//validamos si existen org_comunitarias
	if(form.org_comunitarias.value ==0 || form.org_comunitarias.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si existen organizaciones comunitarias.');
		form.org_comunitarias.value=" ";
		form.org_comunitarias.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el name_organizacion
	if(form.name_organizacion.value ==" " || form.name_organizacion.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique el nombre de la organización.');
		form.name_organizacion.value=" ";
		form.name_organizacion.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si participa_org
	if(form.participa_org.value ==0 || form.participa_org.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si participa en alguna organización comunitaria.');
		form.participa_org.value=" ";
		form.participa_org.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si participa algun familiar
	if(form.familiar_org.value ==0 || form.familiar_org.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si participa algun familiar en alguna organización comunitaria.');
		form.familiar_org.value=" ";
		form.familiar_org.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos el name_mision
	if(form.name_mision.value ==0 || form.name_mision.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique que misión esta en su comunidad.');
		form.name_mision.value=" ";
		form.name_mision.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si hay otra_mision
	/*if(form.otra_mision.value==0 || form.otra_mision.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si hay o no otra misión.');
		form.otra_mision.value=" ";
		form.otra_mision.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}*/

	//validamos las preguntas
	if(form.pueblo_pregunta1.value ==0 || form.pueblo_pregunta1.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 1 de la sección participación comunitaria.');
		form.pueblo_pregunta1.value=" ";
		form.pueblo_pregunta1.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la pregunta2
	if(form.pueblo_pregunta2.value ==0 || form.pueblo_pregunta2.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 2 de la sección participación comunitaria.');
		form.pueblo_pregunta2.value=" ";
		form.pueblo_pregunta2.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta3
	if(form.pueblo_pregunta3.value ==0 || form.pueblo_pregunta3.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 3 de la sección participación comunitaria.');
		form.pueblo_pregunta3.value=" ";
		form.pueblo_pregunta3.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta4
	if(form.pueblo_pregunta4.value ==0 || form.pueblo_pregunta4.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 4 de la sección participación comunitaria.');
		form.pueblo_pregunta4.value=" ";
		form.pueblo_pregunta4.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta5
	if(form.pueblo_pregunta5.value ==0 || form.pueblo_pregunta5.value ==null){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 5 de la sección participación comunitaria.');
		form.pueblo_pregunta5.value=" ";
		form.pueblo_pregunta5.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta6
	if(form.pueblo_pregunta6.value==null || form.pueblo_pregunta6.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 6 de la sección participación comunitaria.');
		form.pueblo_pregunta6.value=" ";
		form.pueblo_pregunta6.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta7
	if(form.pueblo_pregunta7.value==null || form.pueblo_pregunta7.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 7 de la sección participación comunitaria.');
		form.pueblo_pregunta7.value=" ";
		form.pueblo_pregunta7.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta8
	if(form.pueblo_pregunta8.value==null || form.pueblo_pregunta8.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 8 de la sección participación comunitaria.');
		form.pueblo_pregunta8.value=" ";
		form.pueblo_pregunta8.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta9
	if(form.pueblo_pregunta9.value==null || form.pueblo_pregunta9.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 9 de la sección participación comunitaria.');
		form.pueblo_pregunta9.value=" ";
		form.pueblo_pregunta9.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta10
	if(form.pueblo_pregunta10.value==null || form.pueblo_pregunta10.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 10 de la sección participación comunitaria.');
		form.pueblo_pregunta10.value=" ";
		form.pueblo_pregunta10.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta11
	if(form.pueblo_pregunta11.value==null || form.pueblo_pregunta11.value.length == 0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 11 de la sección participación comunitaria.');
		form.pueblo_pregunta11.value=" ";
		form.pueblo_pregunta11.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pregunta12
	if(form.pueblo_pregunta_final.value ==0 || form.pueblo_pregunta_final.value ==null || form.pueblo_pregunta_final.value ==" "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique al menu un área de trabajo  que le gustaría participar de la sección participación comunitaria.');
		form.pueblo_pregunta_final.value=" ";
		form.pueblo_pregunta_final.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos si hay otra_area
	if(form.otra_area.value==null || form.otra_area.value ==0 || form.otra_area.value ==" "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Indique si hay o no otra area en la que participaria de la sección participación comunitaria.');
		form.otra_area.value=" ";
		form.otra_area.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta14
	if(form.pueblo_pregunta14.value ==0 || form.pueblo_pregunta14.value ==null || form.pueblo_pregunta14.value ==" "){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 14 de la sección Situación de la comunidad.');
		form.pueblo_pregunta14.value=" ";
		form.pueblo_pregunta14.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos pueblo_pregunta15
	if(form.pueblo_pregunta15.value ==0 || form.pueblo_pregunta15.value ==null || form.pueblo_pregunta15.value ==" " ){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Responda la pregunta 15 de la sección Situación de la comunidad.');
		form.pueblo_pregunta15.value=" ";
		form.pueblo_pregunta15.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//VALIDAMOS LOS DATOS DEL ENCUESTADO

	//validamos el nombre y apellido del encuestado
	if(form.names_encuestado.value==null || form.names_encuestado.value==0 || form.names_encuestado.value==0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingrese el nombre de la persona encuestada.');
		form.names_encuestado.value=" ";
		form.names_encuestado.focus();
		return false;
	}else
	{
		//document.getElementById("mensaje_error").innerHTML="";
	}

	//validamos la cedula del encuestado
	if(form.ced_encuestado.value==null || form.ced_encuestado.value==0 || form.ced_encuestado.value==0){
		//document.getElementById("mensaje_error").innerHTML="";
		alert('Ingrese la cedula de la persona encuestada.');
		form.ced_encuestado.value=" ";
		form.ced_encuestado.focus();
		return false;
	}else if(isNaN(form.ced_encuestado.value)==true){
		alert('El N° de Cedula del encuestado debe de ser solo de tipo númerico.');
		form.ced_encuestado.value=" ";
		form.ced_encuestado.focus();
		return false;
	}else if(form.ced_encuestado.value<=-1){
		alert('la cedula no debe de tener valores negativos');
		form.ced_encuestado.value=="";
		form.ced_encuestado.focus();
		return false;
	}else if(form.ced_encuestado.value.length < 6){
		alert('la cedula debe tener al menos 6 caracteres');
		form.ced_encuestado.value=="";
		form.ced_encuestado.focus();
		return false;
	}else if(form.ced_encuestado.value.length > 8){
		alert('la cedula debe tener maximo 8 caracteres');
		form.ced_encuestado.value=="";
		form.ced_encuestado.focus();
		return false;
	}else{

	}
	//CON FORM.SUBMIT ENVIAMOS EL FORM
	form.submit();
}


//una funcion para confirmar cancelacion de censo
function cancelar_censo(url){//le pasamos un parametro el cual va a ser la url
  if(confirm("¿Esta seguro de cancelar este censo?")){
    window.location=url;
  }

}

//funcion para dar el pase a la eliminacion del censo
function elimina_censo(url){//le pasamos un parametro el cual va a ser la url
  if(confirm("¿Esta seguro de cancelar este censo?")){
    window.location=url;
  }

}
