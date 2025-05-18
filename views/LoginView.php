<?php

namespace MPadron\MVC\Views;

if ( ! defined( 'WORK_DIR' ) ) {
  exit;  // Exit if accesses directly.
}

class LoginView {

  /**
   * The name of the view
   *
   * @var string
   */
  private $view_name;

  public function __construct() {
    $this->view_name = 'Login View | MPadron MVC';
  }

  public function render( ?array $user = null ): void {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <?php $this->render_head(); ?>
      <head>
      <body>
        <?php $this->render_body($user); ?>
      </body>
    </html>
    <?php
  }

  private function render_head(): void {
    ?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF8"/>
    <title><?php echo $this->view_name; ?></title>
    <?php
  }

  public function render_body( array $user = null ): void {
    ?>
    <h1>Welcome to the Login View</h1>
    <form action="." method="POST">
      <div>
        <div style="margin-bottom: 12px;">
          <label for="username">
            <span style="display: block;">Username</span>
            <input type="text" name="username" id="username" value="<?php echo isset( $user[ 'username' ] ) ? $user[ 'username' ] : '' ?>" required/>
          </label>
        </div>
        <div style="margin-bottom: 12px;">
          <label for="password">
            <span style="display: block;">Password</span>
            <input type="password" name="password" id="password" value="<?php echo isset( $user[ 'password' ] ) ? $user[ 'password' ] : '' ?>" required/>
          </label>
        </div>
        <div>
          <button type="submit">
            Send
          </button>
        </div>
      </div>
    </form>
    <?php

    if ( isset( $user[ 'username' ] ) && isset( $user[ 'password' ] ) ) {
      ?>
      <div>
        <h3>Usuario autenticado correctamente desde el modelo</h3>
        <p>Bienvenido: <?php echo $user[ 'nombre' ]; ?></p>
        <p>Rol en el sistema: <?php echo $user[ 'role' ]; ?></p>
      </div>
      <?php
    }
  }

}
