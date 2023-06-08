<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jugadorId = $_POST['jugador_id'];

    // Realiza la eliminación del jugador
    $resultado = $equipoController->eliminarJugador($jugadorId);

    if ($resultado) {
        // Redirecciona a la página de mostrar equipo
        header('Location: mostrar_equipo.php?equipo_id=' . $equipoId);
        exit;
    } else {
        echo "Error al eliminar el jugador.";
    }
}