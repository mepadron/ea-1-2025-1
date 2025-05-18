<?php

namespace MPadron\MVC\Models;

if ( ! defined( 'WORK_DIR' ) ) {
  exit;  // Exit if accesses directly
}

class ValidUserModel {

  /**
   * An array containing the deafult users in database.
   *
   * @var array
   */
  private $users;

  /**
   * Este es el constructor de la clase modelo que inicializa los datos de los user.
   */
  public function __construct() {
    $this->users = array(
      'admin'      => array( 'username' => 'mp', 'password' => '12345', 'nombre' => 'Administrador', 'role' => 'admin' ),
      'supervisor' => array( 'username' => 'supervisor', 'password' => '444', 'nombre' => 'Supervisor', 'role' => 'supervisor' )
    );
  }

  /**
   * Function to make the user auth.
   *
   * @param string $user  The username.
   * @param string $pass  The user's password.
   */
  public function validate_user( string $username, string $pass ): array | null {
    foreach ( $this->users as $key => $user ) {
      if ( $username === $user[ 'username' ] && $pass === $user[ 'password' ] ) {
        return $user;
      }
    }

    return null;
  }

  public function __destruct() {
    // echo "<br>Soy el metodo destructor modelo ";
  }

}
