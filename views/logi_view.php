

<?php

include_once "controllers/valid_user_controller.php";
include_once "libs/kint.phar";

$prueba = new LogueoSistema();
$user=$prueba->validarUsuario("mp","12345");

if ($user !== null) {
    echo "<h3>Usuario autenticado correctamente desde el modelo</h3>";
    echo "<p>Bienvenido: " . $user['nombre'] . "</p>";
    echo "<p>Rol en el sistema: " . $user['rol'] . "</p>";
    
  
    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";
    d($user);
    
  } else {
    echo "<h3>Error de autenticación</h3>";
    echo "<p>Las credenciales proporcionadas no son válidas.</p>";
  }