<?php
include_once "models/valid_user_model.php";
class LogueoSistema {


  
  public function validarUsuario($lForm,$cForm){

    $modelo = new ValidUserModel();

    $datoUser = $modelo->validarUsuario($lForm,$cForm);

    // print_r($datoUser);

    return $datoUser;


    // aquo debo valida si vien los valores, sino devolver

    // if($modelo->loginBD==$lForm and $modelo->claveBD==$cForm ){
    //   echo "Ustes esta permitido entrar al sistema";
    // }else{
    //   echo "NOOOOOO esta permitido entrar al sistema";

    // }
  }
  
}