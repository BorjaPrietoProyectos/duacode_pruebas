<?php

class JugadorController {
    private $jugadorModel;

    public function __construct() {
        $this->jugadorModel = new JugadorModel();
    }

    public function guardarJugador($nombre, $numero, $equipo) {
        $resultado = $this->jugadorModel->guardarJugador($nombre, $numero, $equipo);
       
        return $resultado;
    }
}