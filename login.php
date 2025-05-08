<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


class LogueoSistema {

  public $loginBD="mp";
  public $claveBD="12345";



  public function validarUsuario($lForm,$cForm){

    // aquo debo valida si vien los valores, sino devolver

    if($this->loginBD==$lForm and $this->claveBD==$cForm ){
      echo "Ustes esta permitido entrar al sistema";
    }else{
      echo "NOOOOOO esta permitido entrar al sistema";

    }
  }
  
}

$prueba = new LogueoSistema();
$prueba->validarUsuario("mp","12345");
