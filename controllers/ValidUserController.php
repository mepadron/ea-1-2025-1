<?php

namespace MPadron\MVC\Controllers;

if ( ! defined( 'WORK_DIR' ) ) {
  exit;  // Exit if accesses direcly;
}

use MPadron\MVC\Models\ValidUserModel;
use MPadron\MVC\Views\LoginView;

class ValidUserController {

  /**
   * The default model linked to the controller.
   *
   * @var ValidUserModel
   */
  private $model;

  /**
   * The default view linked to the controller.
   *
   * @var LoginView
   */
  private $view;

  public function __construct( ValidUserModel $model, LoginView $view ) {
    $this->model = $model;
    $this->view  = $view;
  }

  private function validate_user( string $user, string $pass ): array | null {

    $user = $this->model->validate_user( $user, $pass );

    // print_r($user);

    return $user;

    // aquo debo valida si vien los valores, sino devolver

    // if($modelo->loginBD==$lForm and $modelo->claveBD==$cForm ){
    //   echo "Ustes esta permitido entrar al sistema";
    // }else{
    //   echo "NOOOOOO esta permitido entrar al sistema";
    // }
  }

  public function render(): void {
    if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) {
      $user = $this->validate_user(
        $_POST[ 'username' ],
        $_POST[ 'password' ]
      );

      $this->view->render( $user );
    } else {
      $this->view->render( array() );
    }
  }

  public function get_view(): LoginView {
    return $this->view;
  }

  public function get_model(): ValidUserModel {
    return $this->model;
  }

}
