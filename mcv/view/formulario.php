<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Equipo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../estilos/style.css">

</head>
<body>
    <div class="formulario-container">
    <h2>Formulario de Equipo</h2>
    <form id="equipoForm" method="POST" action="../../index.php">
        <label for="nombre_equipo">Nombre del Equipo:</label>
        <input type="text" id="nombre_equipo" name="nombre_equipo" required>
        
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        
        <label for="deporte">Deporte:</label>
        <input type="text" id="deporte" name="deporte" required>
        
        <label for="caracteristicas">Características del Equipo:</label>
        <textarea id="caracteristicas" name="caracteristicas" rows="4" cols="30" required></textarea>
        
        <label for="fecha_creacion">Fecha de Creación:</label>
        <input type="date" id="fecha_creacion" name="fecha_creacion" required>
        
        <label for="num_jugadores">Número de Jugadores:</label>
        <select id="num_jugadores" name="num_jugadores" required>
            <option value="1">1 jugador</option>
            <option value="2-7">2-7 jugadores</option>
            <option value="10+">Más de 10 jugadores</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#equipoForm').submit(function(event) {
                event.preventDefault();

                var nombreEquipo = $('#nombre_equipo').val();
                var ciudad = $('#ciudad').val();
                var deporte = $('#deporte').val();
                var caracteristicas = $('#caracteristicas').val();
                var fechaCreacion = $('#fecha_creacion').val();
                var numJugadores = $('#num_jugadores').val();

                var nombreEquipoRegex = /^[A-Za-z\s]+$/;
                var ciudadRegex = /^[A-Za-z\s]+$/;
                var deporteRegex = /^[A-Za-z\s]+$/;

                if (!nombreEquipo.match(nombreEquipoRegex)) {
                    alert('El nombre del equipo debe contener solo letras y espacios');
                    return;
                }

                if (!ciudad.match(ciudadRegex)) {
                    alert('La ciudad debe contener solo letras y espacios');
                    return;
                }

                if (!deporte.match(deporteRegex)) {
                    alert('El deporte debe contener solo letras y espacios');
                    return;
                }

                this.submit();
            });
        });
    </script>
</body>
</html>