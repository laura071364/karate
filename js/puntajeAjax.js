var target=document.querySelector('#categoria');

target.addEventListener('change',onChangeHandler,false);

// function onChangeHandler(e){
//    //e.preventDefault();
//    console.log(e.target.value);//FUNCIONA  
// }


function onChangeHandler(e){
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200) {
            document.getElementById("competidores").innerHTML=this.responseText;
        }
    }
   xmlhttp.open("GET","../php/EvaluacionEnCurso.php?idcat="+e.target.value,true);
   xmlhttp.send();
}

