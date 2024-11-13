<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Compra</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Agregar Compra</h1>
    <form action="index.php?action=agregar" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" required><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
