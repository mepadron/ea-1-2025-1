<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


class Prueba {
  public  function HolaMundo(string $L) {
    $this->HolaMundo2($L);
    echo "Hola Mundo buenos dias {$L}";
}

public function HolaMundo2(string $nombre) {
    echo "Hola $nombre buenos dias";
    echo "<br>";
}
}

$prueba = new Prueba();
$prueba->HolaMundo("Javier");
