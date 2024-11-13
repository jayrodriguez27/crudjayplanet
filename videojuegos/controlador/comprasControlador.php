<?php
require_once './modelo/comprasModelo.php';

class ComprasControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ComprasModelo();
    }

    public function listarCompras() {
        $compras = $this->modelo->obtenerCompras();
        include './vistas/listarCompras.php';
    }

    public function agregarCompra() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $empresa = $_POST['empresa'];
            $precio = $_POST['precio'];
            $this->modelo->agregarCompra($nombre, $empresa, $precio);
            header('Location: index.php');
        } else {
            include './vistas/agregarCompra.php';
        }
    }

    public function editarCompra($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $empresa = $_POST['empresa'];
            $precio = $_POST['precio'];
            $this->modelo->editarCompra($id, $nombre, $empresa, $precio);
            header('Location: index.php');
        } else {
            $compra = $this->modelo->obtenerCompraPorId($id);
            include './vistas/editarCompra.php';
        }
    }

    public function eliminarCompra($id) {
        $this->modelo->eliminarCompra($id);
        header('Location: index.php');
    }
}
