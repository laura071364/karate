$(document).ready(function(){
    // alert("prueba")
    $.ajax({
        type:'POST',
        url:'../php/cargar_categoria.php'
    })
    .done(function(categorias){
        $('#categorias').html(categorias)
    })
    .fail(function(){
        alert("Hubo un error al cargar los competidores")
    })
//tabla competidores
    $('#categorias').on('change',function(){
        var id=$('#categorias').val();
        $.ajax({
            type:'POST',
            url:'../php/cargar_competidores.php',
            data:{'id':id}
        })
        .done(function(competidores){
            $('#cuerpo-tabla-competidores').html(competidores)
        })
        .fail(function(){
            alert("Hubo un error al cargar los competidores")
        }) 
        
    })

    //tabla arbitros
    $('#categorias').on('change',function(){
        var id=$('#categorias').val();
        $.ajax({
            type:'POST',
            url:'../php/cargar_arbitros.php',
            data:{'id':id}
        })
        .done(function(arbitros){
            $('#cuerpo-tabla-arbitros').html(arbitros)
        })
        .fail(function(){
            alert("Hubo un error al cargar los competidores")
        })
    })

})


// var target=document.querySelector('#categorias');

// target.addEventListener('change',onChangeHandler,false);


// function onChangeHandler(e){
//     var xmlhttp=new XMLHttpRequest();
//     xmlhttp.onreadystatechange=function(){
//         if (this.readyState==4 && this.status==200) {
//             document.getElementById("competidores").innerHTML=this.responseText;
//         }
//     }
//    xmlhttp.open("GET","../php/datos.php?idcat="+e.target.value,true);
//    xmlhttp.send();
// }

