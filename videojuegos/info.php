<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del crud de videojuegos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Información del crud de videojuegos "JAY PLANET"</h1>
        
        <h2>Link de descarga de este repositorio</h2>
        <p>
            Puedes descargar el proyecto desde el siguiente enlace:
            <a href="https://github.com/tu_usuario/nombre_del_repositorio" target="_blank">Repositorio en GitHub</a>
        </p>

        <h2>Instrucciones de instalación</h2>
        <ol>
            <li>Clona o descarga el repositorio desde GitHub.</li>
            <li>Copia la carpeta del proyecto en `htdocs` dentro de la carpeta de instalación de XAMPP.</li>
            <li>Abre XAMPP y activa los servicios de Apache y MySQL.</li>
            <li>Crea una base de datos llamada <strong>videojuegos</strong> en phpMyAdmin.</li>
            <li>Ejecuta la siguiente consulta SQL para crear la tabla `compras`:</li>
        </ol>

        <pre>
CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Empresa VARCHAR(100) NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL
);
        </pre>

        <h2>Descripción de la implementación</h2>
        <p>
            Este CRUD permite gestionar un listado de compras con las operaciones básicas de creación, lectura, actualización y eliminación.
            La estructura se compone de una carpeta de controladores, modelos y vistas que interactúan para ejecutar las acciones.
        </p>

        <h2>Datos del desarrollador</h2>
        <ul>
            <li>Nombre: "JUAN MANUEL CANSECO RODRIGUEZ"</li>
            <li>Número de conntrol: "201064193"</li>
            <li>Fecha de instalacion: "OCTUBRE 2024"</li>
            <li>Correo electronico:"jayrodriguez2709@gmail.com"</li>
        </ul>
        
        <a href="index.php">Volver a la página principal</a>
    </div>
</body>
</html>
