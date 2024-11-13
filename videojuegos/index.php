<?php
require_once './controlador/comprasControlador.php';

$controlador = new ComprasControlador();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action === 'agregar') {
        $controlador->agregarCompra();
    } elseif ($action === 'editar' && isset($_GET['id'])) {
        $controlador->editarCompra($_GET['id']);
    } elseif ($action === 'eliminar' && isset($_GET['id'])) {
        $controlador->eliminarCompra($_GET['id']);
    } else {
        $controlador->listarCompras();
    }
} else {
    $controlador->listarCompras();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Gestión de Compras</h1>
        <nav>
            <ul>
                <li><a href="?action=listar">Listar Compras</a></li>
                <li><a href="info.php">Información del Proyecto</a></li> <!-- Enlace agregado a info.php -->
            </ul>
        </nav>
    </header>

    <main>
        <section id="compras">
            <?php
            if (isset($_GET['action']) && $_GET['action'] === 'listar') {
                $compras = $controlador->listarCompras();
                if (!empty($compras)) {
                    echo "<table>";
                    echo "<thead><tr><th>ID</th><th>Descripción</th><th>Precio</th><th>Acciones</th></tr></thead>";
                    echo "<tbody>";
                    foreach ($compras as $compra) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($compra['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($compra['descripcion']) . "</td>";
                        echo "<td>" . htmlspecialchars($compra['precio']) . "</td>";
                        echo "<td>
                                <a href='?action=editar&id=" . htmlspecialchars($compra['id']) . "'>Editar</a>
                                <a href='?action=eliminar&id=" . htmlspecialchars($compra['id']) . "' onclick='return confirm(\"¿Estás seguro de que quieres eliminar esta compra?\")'>Eliminar</a>
                              </td>";
                        echo "</tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<p>No hay compras registradas.</p>";
                }
            }
            ?>
        </section>
    </main>
</body>
</html>

