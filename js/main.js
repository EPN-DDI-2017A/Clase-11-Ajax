$(document).ready(function() {
    $('#enviar').on('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'procesar_formulario.php',
            type: 'post',
            dataType: 'json',
            data: {
                nombre: $('#nombre').val(),
                apellido: $('#apellido').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password2: $('#password2').val()
            },
        })
        .done(function(data) {
            console.log("success");
            console.log(data.mensaje);

            var clase_msg = 'alert-success';
            if (data.error) {
                clase_msg = 'alert-danger';
            }
            var html = '<div id="mensaje" class="alert ' + clase_msg +  ' alert-dismissible" role="alert">';
            html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            html += '<span aria-hidden="true">&times;</span>';
            html += '</button>';
            html += data.mensaje;
            html += '</div>';
    
            $('.container').prepend(html);

            $('#mensaje').slideUp(10000);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });

    
    
    
});