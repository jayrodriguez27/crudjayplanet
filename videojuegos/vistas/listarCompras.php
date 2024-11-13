<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Compras</h1>
    <a href="index.php?action=agregar">Agregar Compra</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Empresa</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($compras as $compra): ?>
        <tr>
            <td><?= $compra['id'] ?></td>
            <td><?= $compra['Nombre'] ?></td>
            <td><?= $compra['Empresa'] ?></td>
            <td><?= $compra['Precio'] ?></td>
            <td>
                <a href="index.php?action=editar&id=<?= $compra['id'] ?>">Editar</a>
                <a href="index.php?action=eliminar&id=<?= $compra['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
