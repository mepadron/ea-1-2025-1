<?php

define( 'WORK_DIR', __DIR__ . '/' );

require WORK_DIR . 'autoload.php';

use MPadron\MVC\Models\ValidUserModel;
use MPadron\MVC\Views\LoginView;
use MPadron\MVC\Controllers\ValidUserController;

$controller = new ValidUserController(
  new ValidUserModel(),
  new LoginView()
);

$controller->render_view();
