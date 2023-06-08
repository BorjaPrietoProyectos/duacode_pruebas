<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Jugador</title>
</head>
<body>
    <h2>Información del Jugador</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Número</th>
            <th>Equipo</th>
        </tr>
        <tr>
            <td><?php echo $jugador['nombre']; ?></td>
            <td><?php echo $jugador['numero']; ?></td>
            <td><?php echo $jugador['nombre_equipo']; ?></td>
        </tr>
    </table>
</body>
</html>