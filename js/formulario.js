
formulario.addEvenetListener('submit',(e)=>{
	e.preventDefault();
});


const inputs = document.querySelectorAll('#formulario_logueo inputs');

function validar(){
	formulario = document.getElementById('formulario_logueo');

	if(formulario.username.value==0){
		alert("el campo usuario esta vacio");
		formulario.username.value=='';
		formulario.username.focus();
		return false;
	}
	else if(formulario.password.value==0){
			alert("el campo contraseña esta vacio");
			formulario.password.value=='';
			formulario.password.focus();
			return false;
	}else
			return true;

}

function limpiarCampos(){
	alert("NO ESTAS REGISTRADO");
	formulario.username.value='';
	formulario.password.value='';
	window.history.back();
	return false;
}

var form = document.getElementById("formulario_logueo");

document.getElementById("envio").addEventListener("click", function () {
	if(validar()){
		form.submit();
	}
	limpiarCampos();
	 
 });
