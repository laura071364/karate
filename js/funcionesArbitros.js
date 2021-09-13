const puntF = document.querySelector('#pF')
const outputF = document.querySelector('#pF-output')
const puntT = document.querySelector('#pT')
const outputT = document.querySelector('#pT-output')

outputF.textContent = puntF.value
outputT.textContent = puntT.value

puntF.addEventListener('input', function() {
	outputF.textContent = puntF.value
});

puntT.addEventListener('input', function() {
	outputT.textContent = puntT.value
});



const evaluacion={
		usuario:document.getElementById('userConected').value,
		//categoria:document.getElementById('cat'),
		//nyaCompetidor:document.getElementById('nya'),
		pFisico:document.getElementById('pF-output').value,
		pTecnico:document.getElementById('pT-output').value
}

function votarNulo(){
	
	if(confirm("Seguro")){
		let anularpF=document.querySelector('#puntajes');
	//let anularpT=document.querySelector('#pT');
	anularpF.setAttribute("hidden","");
	//anularpT.setAttribute("hidden","");
	}
	
}



// console.log('RICKY TRUCHO!!!');