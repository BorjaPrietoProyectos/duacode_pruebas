<?php

class EquipoController {
    private $equipoModel;

    public function __construct() {
        $this->equipoModel = new EquipoModel();
    }

    public function guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores) {

        $resultado = $this->equipoModel->guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores);


        return $resultado;
    }

    public function listarEquipos() {
        $equipoModel = new EquipoModel();
    
        $equipos = $equipoModel->obtenerEquipos();
    
        if ($equipos) {
            include_once 'mcv\view\listar_equipos.php';
        } else {
            echo "Error al obtener los equipos.";
        }
    }

    public function mostrarEquipo($equipoId) {
        $equipoModel = new EquipoModel();
    
        $equipo = $equipoModel->obtenerEquipo($equipoId);
    
        if ($equipo) {
            include_once 'mcv\view\mostrar_equipo.php';
        } else {
            echo "El equipo no existe.";
        }
    }
}
?>