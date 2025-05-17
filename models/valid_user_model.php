<?php
class ValidUserModel{

    // public $loginBD="mp";
    // public $claveBD="12345";

    private $usuarios;

    /**
     * este es el contrctor de clase modelo q iniciliza los datos de los user
     */
    public function __construct() {
        $this->usuarios = [
            'admin' => [
                'login' => 'mp',
                'clave' => '12345',
                'nombre' => 'Administrador',
                'rol' => 'admin'
            ],
            'supervisor' => [
                'login' => 'supervisor',
                'clave' => '444',
                'nombre' => 'Supervisor',
                'rol' => 'supervisor'
            ]
        ];
    }




    public function validarUsuario($login, $clave) {
        
        foreach ($this->usuarios as $clave_usuario => $usuario) {
            
            if ($usuario['login'] == $login && $usuario['clave'] == $clave) {
                return $usuario;
            }
        }
        return null;
    }


    public function __destruct()
    {
        // echo "<br>Soy el metodo destructor modelo ";
    }

}