<!DOCTYPE html>
<html>
<head>
    <title>Equipo: <?php echo $equipo['nombre']; ?></title>
</head>
<body>
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
    <ul>
        <?php foreach ($jugadores as $jugador): ?>
        <li>
            <?php echo $jugador['nombre']; ?> (Número: <?php echo $jugador['numero']; ?>)
            <form action="editar_jugador.php" method="POST">
                <input type="hidden" name="jugador_id" value="<?php echo $jugador['id']; ?>">
                <input type="text" name="nombre" value="<?php echo $jugador['nombre']; ?>">
                <input type="number" name="numero" value="<?php echo $jugador['numero']; ?>">
                <input type="submit" value="Editar">
            </form>
            
            <form action="eliminar_jugador.php" method="POST">
                <input type="hidden" name="jugador_id" value="<?php echo $jugador['id']; ?>">
                <input type="submit" value="Eliminar">
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>Jugadores no inscritos.</p>
    <?php endif; ?>
</body>
</html>