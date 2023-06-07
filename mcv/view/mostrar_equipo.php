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
</body>
</html>