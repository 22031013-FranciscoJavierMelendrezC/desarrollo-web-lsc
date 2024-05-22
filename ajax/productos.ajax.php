<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelos.php";

class ajaxProductos
{

    public $codigo_producto;
    public $nombre_producto;
    public $descripcion_producto;
    public $id_categoria_producto;
    public $stock_producto;
    public $minimo_stock_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    
    public $ventas_producto;

    public function ajaxlistarproductos(){

        $Productos = productoControlador::ctrListarproductos();
    
        echo json_encode($Productos, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxRegistrarProducto(){
        
        $producto = ProductoControlador::ctrRegistrarProducto($this->codigo_producto, $this->nombre_producto,$this->descripcion_producto,$this->id_categoria_producto,        
                    $this->stock_producto,$this->minimo_stock_producto,$this->precio_compra_producto,$this->precio_venta_producto,$this->utilidad);

        echo json_encode($producto);
    }

}
if(isset($_POST['accion']) && $_POST['accion'] == 1){//parametro para listar categorias

    $categorias = new ajaxProductos();
    $categorias -> ajaxlistarproductos();

}
else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // parametro para registrar productos

    $registrarProducto = new AjaxProductos();
    $registrarProducto -> codigo_producto = $_POST["codigo_producto"];
    $registrarProducto -> id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto -> descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto -> precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto -> precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto -> utilidad = $_POST["utilidad"];
    $registrarProducto -> stock_producto = $_POST["stock_producto"];
    $registrarProducto -> minimo_stock_producto = $_POST["minimo_stock_producto"];
    $registrarProducto -> ventas_producto = $_POST["ventas_producto"];
    $registrarProducto -> ajaxRegistrarProducto();

}
