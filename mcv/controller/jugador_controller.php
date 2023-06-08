<?php

require_once '../model/jugador.php';

class JugadorController {
    private $jugadorModel;

    public function __construct() {
        $this->jugadorModel = new JugadorModel();
    }

    public function guardarJugador() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            $numero = $_POST["numero"];
            $equipo = $_POST["equipo"];

            $resultado = $this->jugadorModel->guardarJugador($nombre, $numero, $equipo);

            if ($resultado) {
                echo "Jugador guardado correctamente en la base de datos.";
            } else {
                echo "Error al guardar el jugador en la base de datos.";
            }
        }
    }
}