$("#form").submit(function(event){
    event.preventDefault();
    enviar();
});

function enviar(){
    var datos = $("#form").serialize();
    console.log(datos);
    $.ajax({
        type: "post",
        url: "formulario.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phpError(texto);
            }
        }
    })
}

function correcto() {
    $("#mensajeExito").removeClass("d-none");
    $("#mensajeError").addClass("d-none");
    $("#form")[0].reset();
}

function phpError(texto) {
    $("#mensajeError").removeClass("d-none");
    $('#mensajeError').html(texto);
}