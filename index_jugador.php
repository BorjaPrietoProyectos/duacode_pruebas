<?php
require_once 'mcv\model\jugador.php';
require_once 'mcv\controller\jugador_controller.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["nombre"];
        $numero = $_POST["numero"];
        $equipo = $_POST["equipo"];

        $jugadorController = new JugadorController();
    
        $resultado = $jugadorController->guardarJugador($nombre, $numero, $equipo);
    
        if ($resultado) {
            echo "Jugador guardado correctamente en la base de datos.";
        } else {
            echo "Error al guardar el jugador en la base de datos.";
        }
}

?>