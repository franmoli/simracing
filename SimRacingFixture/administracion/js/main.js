/************************* EXPRESIONES REGULARES **************************/

/************************* FUNCIONES **************************/

/************************* ELEMENTOS DEL DOM **************************/
$(document).ready(function () {



    $( "#form-recuperacion" ).submit(function( event ) {
        


        Swal.fire(
            'Email enviado',
            'Se le envio una nueva clave de acceso por correo',
            'success'
        )
        event.preventDefault();
        
        console.log($("#username").val());
    });

});