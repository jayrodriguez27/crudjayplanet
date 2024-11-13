<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Compra</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Editar Compra</h1>
    <form action="index.php?action=editar&id=<?= $compra['id'] ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= $compra['Nombre'] ?>" required><br>
        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" value="<?= $compra['Empresa'] ?>" required><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $compra['Precio'] ?>" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
