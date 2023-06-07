<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Equipo</title>
</head>
<body>
    <h2>Formulario de Equipo</h2>
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre_equipo">Nombre del Equipo:</label>
        <input type="text" id="nombre_equipo" name="nombre_equipo" required><br><br>
        
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br><br>
        
        <label for="deporte">Deporte:</label>
        <input type="text" id="deporte" name="deporte" required><br><br>
        
        <label for="caracteristicas">Características del Equipo:</label><br>
        <textarea id="caracteristicas" name="caracteristicas" rows="4" cols="30" required></textarea><br><br>
        
        <label for="fecha_creacion">Fecha de Creación:</label>
        <input type="date" id="fecha_creacion" name="fecha_creacion" required><br><br>
        
        <label for="num_jugadores">Número de Jugadores:</label>
        <select id="num_jugadores" name="num_jugadores" required>
            <option value="1">1 jugador</option>
            <option value="2-7">2-7 jugadores</option>
            <option value="10+">Más de 10 jugadores</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
