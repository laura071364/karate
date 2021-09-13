$(document).ready(function () {
  //ini
  var ultimoValorValido = null;
  $("#categorias").on("change", function () {
    if ($("#categorias option:checked").length > 6) {
      $("#categorias").val(ultimoValorValido);
    } else {
      ultimoValorValido = $("#categorias").val();
    }
  });
  //fin

})






