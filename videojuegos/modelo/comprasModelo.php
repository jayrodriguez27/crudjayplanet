<?php
class ComprasModelo {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'videojuegos');
        if ($this->db->connect_error) {
            die("Error de conexión: " . $this->db->connect_error);
        }
    }

    // Leer todas las compras
    public function obtenerCompras() {
        $resultado = $this->db->query("SELECT * FROM compras");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Crear una nueva compra
    public function agregarCompra($nombre, $empresa, $precio) {
        $stmt = $this->db->prepare("INSERT INTO compras (Nombre, Empresa, Precio) VALUES (?, ?, ?)");
        $stmt->bind_param('ssd', $nombre, $empresa, $precio);
        return $stmt->execute();
    }

    // Obtener una compra por ID
    public function obtenerCompraPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM compras WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Editar una compra
    public function editarCompra($id, $nombre, $empresa, $precio) {
        $stmt = $this->db->prepare("UPDATE compras SET Nombre = ?, Empresa = ?, Precio = ? WHERE id = ?");
        $stmt->bind_param('ssdi', $nombre, $empresa, $precio, $id);
        return $stmt->execute();
    }

    // Eliminar una compra
    public function eliminarCompra($id) {
        $stmt = $this->db->prepare("DELETE FROM compras WHERE id = ?");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}