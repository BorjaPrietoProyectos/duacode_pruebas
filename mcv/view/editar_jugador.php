<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jugadorId = $_POST['jugador_id'];
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];

    // Realiza la edición del jugador
    $resultado = $equipoController->editarJugador($jugadorId, $nombre, $numero);

    if ($resultado) {
        // Redirecciona a la página de mostrar equipo
        header('Location: mostrar_equipo.php?equipo_id=' . $equipoId);
        exit;
    } else {
        echo "Error al editar el jugador.";
    }
}