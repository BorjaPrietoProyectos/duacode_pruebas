<!DOCTYPE html>
<html>
<head>
    <title>Equipo: <?php echo $equipo['nombre']; ?></title>
    <link rel="stylesheet" type="text/css" href="../../estilos/style.css">
</head>
<body>
    <div class="equipo-container">
        <h1><?php echo $equipo['nombre']; ?></h1>

        <table>
            <tr>
                <th>Ciudad</th>
                <th>Deporte</th>
                <th>Características del equipo</th>
                <th>Fecha de creación</th>
                <th>Número de jugadores</th>
            </tr>
            <tr>
                <td><?php echo $equipo['ciudad']; ?></td>
                <td><?php echo $equipo['deporte']; ?></td>
                <td><?php echo $equipo['caracteristicas']; ?></td>
                <td><?php echo $equipo['fecha_creacion']; ?></td>
                <td><?php echo $equipo['numero_jugadores']; ?></td>
            </tr>
        </table>

        <h3>Jugadores:</h3>
        <?php if (!empty($jugadores)): ?>
            <ul class="jugadores-lista">
            <?php foreach ($jugadores as $jugador): ?>
            <li class="jugador-item">
                <div class="jugador-info">
                    <span class="jugador-nombre"><?php echo $jugador['nombre']; ?></span>
                    <span class="jugador-numero">(Número: <?php echo $jugador['numero']; ?>)</span>
                </div>
                <div class="jugador-form-container">
                    <form action="editar_jugador.php" method="POST" class="jugador-form">
                        <input type="hidden" name="jugador_id" value="<?php echo $jugador['id']; ?>">
                        <input type="text" name="nombre" value="<?php echo $jugador['nombre']; ?>">
                        <input type="number" name="numero" value="<?php echo $jugador['numero']; ?>">
                    </form>
                    <div class="jugador-botones">
                        <input type="submit" value="Editar" class="btn-editar">
                        <form action="mcv\view\eliminar_jugador.php" method="POST" class="eliminar-jugador-form">
                            <input type="hidden" name="jugador_id" value="<?php echo $jugador['id']; ?>">
                            <input type="submit" value="Eliminar" class="btn-eliminar">
                        </form>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
        <p class="jugadores-vacios">Jugadores no inscritos.</p>
        <?php endif; ?>
    </div>

</body>
</html>