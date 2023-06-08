<?php

class JugadorModel {
    private $db;

    public function __construct() {
        // Configuración de la conexión a la base de datos
        $host = "localhost";
        $usuario = "root";
        $contrasena = "";
        $nombre_bd = "leaguedb";

        $this->db = new mysqli($host, $usuario, $contrasena, $nombre_bd);

        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }
    }

    public function guardarJugador($nombre, $numero, $equipo) {
        $nombre = $this->db->real_escape_string($nombre);
        $numero = $this->db->real_escape_string($numero);
        $equipo = $this->db->real_escape_string($equipo);

        $sql = "INSERT INTO jugador (nombre, numero, equipo_id) 
                VALUES ('$nombre', '$numero', '$equipo')";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
