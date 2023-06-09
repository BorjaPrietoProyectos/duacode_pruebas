<?php

require_once 'mcv\model\team.php';
require_once 'mcv\controller\team_controller.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $nombre_equipo = $_POST["nombre_equipo"];
    $ciudad = $_POST["ciudad"];
    $deporte = $_POST["deporte"];
    $caracteristicas = $_POST["caracteristicas"];
    $fecha_creacion = $_POST["fecha_creacion"];
    $num_jugadores = $_POST["num_jugadores"];

    $equipoController = new EquipoController();

    $resultado = $equipoController->guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores);

    if ($resultado) {
        echo "Equipo guardado correctamente en la base de datos.";
        header('Location: /index.php?accion=listar_equipos');
        die();
    } else {
        echo "Error al guardar el equipo en la base de datos.";
    }
}


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if ($_GET["accion"] === "listar_equipos") {
        $equipoController = new EquipoController();
        $equipoController->listarEquipos();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if ($_GET["accion"] === "mostrar_equipo") {
        $equipoId = $_GET["equipoId"];
        $equipoController = new EquipoController();
        $equipoController->mostrarEquipo($equipoId);
    }
}
?>