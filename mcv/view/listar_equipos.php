<!DOCTYPE html>
<html>
<head>
    <title>Listado de Equipos</title>
</head>
<body>
    <h2>Listado de Equipos</h2>

    <?php if ($equipos): ?>
        <ul>
            <?php foreach ($equipos as $equipo): ?>
                <li>
                    Nombre: <?php echo $equipo['nombre_equipo']; ?>,
                    Ciudad: <?php echo $equipo['ciudad']; ?>,
                    Deporte: <?php echo $equipo['deporte']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay equipos para mostrar.</p>
    <?php endif; ?>
</body>
</html>