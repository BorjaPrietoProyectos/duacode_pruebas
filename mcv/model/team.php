<?php

class EquipoModel {
    private $db;

    public function __construct() {
        
        $host = "localhost";
        $usuario = "root"; 
        $contrasena = ""; 
        $nombre_bd = "leaguedb"; 

        $this->db = new mysqli($host, $usuario, $contrasena, $nombre_bd);

        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }
    }

    public function guardarEquipo($nombre_equipo, $ciudad, $deporte, $caracteristicas, $fecha_creacion, $num_jugadores) {
        $nombre_equipo = $this->db->real_escape_string($nombre_equipo);
        $ciudad = $this->db->real_escape_string($ciudad);
        $deporte = $this->db->real_escape_string($deporte);
        $caracteristicas = $this->db->real_escape_string($caracteristicas);
        $fecha_creacion = $this->db->real_escape_string($fecha_creacion);
        $num_jugadores = $this->db->real_escape_string($num_jugadores);

        $sql = "INSERT INTO equipos (nombre, ciudad, deporte, numero_jugadores, caracteristicas, fecha_creacion)
                VALUES ('$nombre_equipo', '$ciudad', '$deporte', '$num_jugadores', '$caracteristicas', '$fecha_creacion')";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerEquipos() {
        $sql = "SELECT * FROM equipos";
        $resultados = $this->db->query($sql);
    
        if ($resultados) {
            $equipos = $resultados->fetch_all(MYSQLI_ASSOC);
            return $equipos;
        } else {
            return false;
        }
    }

    public function obtenerEquipo($equipoId) {
        $sql = "SELECT * FROM equipos WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $equipoId);
        $stmt->execute();
        $resultados = $stmt->get_result();
    
        if ($resultados) {
            $equipo = $resultados->fetch_assoc();
            return $equipo;
        } else {
            return false;
        }
    }
}
?>