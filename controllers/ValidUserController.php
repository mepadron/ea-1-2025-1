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

  /**
   * Gets the user credentials to validate with the model.
   *
   * @param string $user  The user to validate
   * @param string $pass  The user password to validate
   */
  private function validate_user( string $user, string $pass ): array | null {
    return $this->model->validate_user( $user, $pass );
  }

  public function render_view(): void {
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
