<?php

if($_POST) {
    // Procesamos los datos y los guardamos en la BDD
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $respuesta = [
        'error' => false,
        'mensaje' => ''
    ];

    if ($password === $password2) {
        $respuesta['error'] = false;
        $respuesta['mensaje'] = 'Usuario registrado con éxito.';
    } else {
        $respuesta['error'] = true;
        $respuesta['mensaje'] = 'Las contraseñas no coiciden.';
    }



    // Devolvemos una respuesta al cliente, codificado en json.
    echo json_encode($respuesta);
}