<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Jugador</title>
</head>
<body>
    <h2>Formulario de Jugador</h2>

    <form action="../controller/jugador_controller.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <label for="equipo">Equipo:</label>
        <select id="equipo" name="equipo" required>
            <?php
            require_once '../model/team.php';
            
            $equipoModel = new EquipoModel();
            $equipos = $equipoModel->obtenerEquipos();

            foreach ($equipos as $equipo) {
                echo "<option value='".$equipo['id']."'>".$equipo['nombre']."</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>