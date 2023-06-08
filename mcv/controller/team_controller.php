<?php

include_once 'mcv\model\jugador.php';

class EquipoController {
    private $equipoModel;
    private $jugadorModel;

    public function __construct() {
        $this->equipoModel = new EquipoModel();
        $this->jugadorModel = new JugadorModel();
    }

    public function guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores) {
        $resultado = $this->equipoModel->guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores);

        return $resultado;
    }

    public function listarEquipos() {
        $equipos = $this->equipoModel->obtenerEquipos();

        if ($equipos) {
            include_once 'mcv\view\listar_equipos.php';
        } else {
            echo "Error al obtener los equipos.";
        }
    }

    public function mostrarEquipo($equipoId) {
        $equipo = $this->equipoModel->obtenerEquipo($equipoId);

        if ($equipo) {
            $jugadores = $this->jugadorModel->obtenerJugadoresEquipo($equipoId);

            include_once 'mcv\view\mostrar_equipo.php';
        } else {
            echo "El equipo no existe.";
        }
    }

    public function editarJugador($jugadorId, $nombre, $numero) {
        $resultado = $this->jugadorModel->editarJugador($jugadorId, $nombre, $numero);

        return $resultado;
    }

    public function eliminarJugador($jugadorId) {
        $resultado = $this->jugadorModel->eliminarJugador($jugadorId);

        return $resultado;
    }
}
?>