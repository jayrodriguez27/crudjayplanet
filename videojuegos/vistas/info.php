<!DOCTYPE html>
<html>
<head>
    <title>Información del Proyecto</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Información del CRUD/h1>

    <h2>Liga de descarga</h2>
    <p>Descargar desde este repositorio en GitHub:</p>
    <a href="https://github.com/usuario/videojuegos" target="_blank">JAY PLANET en GitHub</a>

    <h2>Instrucciones de Instalación</h2>
    <ol>
        <li>Copia la carpeta videojuegos en la carpeta htdocs de XAMPP.</li>
        <li>Crea la base de datos en phpMyAdmin ejecutando esta consulta:
            sql
            CREATE DATABASE videojuegos;
            
        </li>
        <li>Crea la tabla compras con esta estructura:
            sql
            CREATE TABLE compras (
                id INT AUTO_INCREMENT PRIMARY KEY,
                Nombre VARCHAR(255) NOT NULL,
                Empresa VARCHAR(255) NOT NULL,
                precio DECIMAL(10,2) NOT NULL,
                stock INT NOT NULL
            );
            
        </li>
    </ol>

    <h2>Descripción de la Implementación</h2>
    <p>Este CRUD permite gestionar una base de datos de cómics, incluyendo la creación, edición, eliminación y visualización de registros.</p>

    <h2>Datos del Desarrollador</h2>
    <p>Nombre: [CANSECO RODRIGUEZ JUAN MANUEL]</p>
    <p>No.Control: [201064193]</p>
    <p>CRUD: [VIDEJUEGOS]</p>

    <p><a href="index.php">Regresar a la pagina principal</a></p>
</body>
</html>