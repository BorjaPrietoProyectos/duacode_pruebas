<?php
require_once 'mcv\controller\team_controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jugadorId = $_POST['jugador_id'];


    $equipoController = new EquipoController();


    $resultado = $equipoController->eliminarJugador($jugadorId);

    if ($resultado) {

        header('Location: mcv\view\mostrar_equipo.php?equipo_id=' . $equipoId);
        exit;
    } else {
        echo "Error al eliminar el jugador.";
    }
}
?>