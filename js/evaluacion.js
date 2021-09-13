var ultimoValorValido = null;
$("#evaluador").on("change", function() {
  if (($("#evaluador option:checked").length = 3) || ($("#evaluador option:checked").length = 5) || ($("#evaluador option:checked").length = 7)){
    $("#evaluador").val(ultimoValorValido);
  } else {
   alert("solo puede seleccionar 3,5 o 7");
    ultimoValorValido = $("#evaluador").val();
  }
});


















  // $("#categoria").change(function(){
  //     var idCategoria = $("#categoria").val();
  //     alert(idCategoria);
  //   });
// var select = document.getElementById('categoria');
// select.addEventListener('change',
//   function(){
//     var selectedOption = this.options[select.selectedIndex];
//     // console.log(selectedOption.value + ': ' + selectedOption.text);
//     let inp=document.getElementById('oculto');
//     inp.innerHTML=selectedIndex;
//   });






// var xhr = new XMLHttpRequest();
// xhr.open('GET','php/consultaCategorias.php');
// xhr.onload = function(){
//   if(xhr.status===200){
//     var json = json.parse(xhr.responseText);
//     var template=``;
//     json.map(function(data){
//       template+=`
//       <select id="sel-cat" name="sel_cat">
//         <option value="0">Seleccione Categoria</option>
//         <option value="${data.idCategoria}">${data.nCategoria}</option>
//         </select>
//       `;
//       return template;
//     });
//     //console.log(json);
//     document.getElementById("cmbx-cat").innerHTML=template;
//   }else{
//     console.log("Hubo un error: "+xhr.status);
//   }
// }

// xhr.send();
// <!----------CODIGO TEMPORAL----------------->
   
//    var h1="hola con var";
//    let h2="hola con let";


   // console.log(h1);
   // console.log(h2);
   // console.log(window);
   // console.log(window.h1);
   // console.log(window.h2);

   // let competidores=[];

   // const evaluacion={  //si tiene llaves es un objeto
   // 		competidores_totales:0,
   // 		ronda:"",// u: unica, s:segunda, d:desempate
   // 		categoria:window.getElementById().value;
   // }
   // //para agregar en el array se usa metodo push
   // competidores.push("fulano freitas");
   // competidores.push("mengano udil");
   // competidores.push("sofia vergara","jona pela");

   // console.log(evaluacion);
   // console.log(competidores);

   // evaluacion.competidores_totales=competidores.length;

   // console.log("total competidores: "+evaluacion.competidores_totales);
 //----------FIN CODIGO TEMPORAL----------------->



// var select = document.getElementById('provincia');
// select.addEventListener('change',
//   function(){
//     var selectedOption = this.options[select.selectedIndex];
//     console.log(selectedOption.value + ': ' + selectedOption.text);
//   });

