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
                    <a href="index.php?accion=mostrar_equipo&equipoId=<?php echo $equipo['id']; ?>">
                        <?php echo $equipo['nombre']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay equipos para mostrar.</p>
    <?php endif; ?>

    <a href="/mcv/view/formulario.php">Volver al formulario</a>
</body>
</html>