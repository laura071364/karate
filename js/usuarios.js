let nombre=document.getElementById('nombre').value;
let apellido=document.getElementById('apellido').value;

function cargar(){
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status==200){
			document.getElementById('res').innerHTML=this.responseText;
		}
	};
	xhttp.open('GET','../php/usuarios.php?nombre='+ nombre+' '+'apellido='+apellido,true);
	xhttp.send();
}