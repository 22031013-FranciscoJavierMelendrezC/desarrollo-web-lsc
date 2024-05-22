<?php


class ProductoControlador{

    static public function ctrListarproductos(){

        $productos = ProductosModelo::Listarproductos();

        return $productos;
    }


    static public function ctrRegistrarProducto($codigo_producto, $nombre_producto,$descripcion_producto,$id_categoria_producto,        
    $stock_producto,$minimo_stock_producto,$precio_compra_producto,$precio_venta_producto,$utilidad){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto, $nombre_producto,$descripcion_producto,$id_categoria_producto,        
        $stock_producto,$minimo_stock_producto,$precio_compra_producto,$precio_venta_producto,$utilidad);

        return $registroProducto;
    }


}