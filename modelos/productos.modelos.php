<?php

require_once "conexion.php";


class ProductosModelo
{
    /*===================================================================
    OBTENER LISTADO TOTAL DE PRODUCTOS PARA EL DATATABLE
    ====================================================================*/
    static public function ListarProductos()
    {

        $stmt = Conexion::conectar()->prepare('call Listar_Productos()');

        $stmt->execute();

        return $stmt->fetchAll();
    }


    /*===================================================================
    REGISTRAR PRODUCTOS UNO A UNO DESDE EL FORMULARIO DEL INVENTARIO
    ====================================================================*/
    static public function mdlRegistrarProducto(
        $codigo_producto,
        $nombre_producto,
        $descripcion_producto,
        $id_categoria_producto,
        $stock_producto,
        $minimo_stock_producto,
        $precio_compra_producto,
        $precio_venta_producto,


        // $ventas_producto
    ) {

        try {

            $fecha = date('Y-m-d');

            $stmt = Conexion::conectar()->prepare("INSERT INTO PRODUCTO(Codigo,
                                                                         Nombre,
                                                                         Descripcion,
                                                                         IdCategoria,
                                                                         Stock,
                                                                         StockMin,
                                                                         PrecioCompra,
                                                                         PrecioVenta
                                                                         ) 

                                                                VALUES (:Codigo,
                                                                         :Nombre,
                                                                         :Descripcion,
                                                                         :IdCategoria,
                                                                         :Stock,
                                                                         :StockMin,
                                                                         :PrecioCompra,
                                                                         :PrecioVenta)");

            $stmt->bindParam(":Codigo", $codigo_producto, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $nombre_producto, PDO::PARAM_STR);
            $stmt->bindParam(":Descripcion", $descripcion_producto, PDO::PARAM_STR);
            $stmt->bindParam(":IdCategoria", $id_categoria_producto, PDO::PARAM_STR);
            $stmt->bindParam(":Stock", $stock_producto, PDO::PARAM_STR);
            $stmt->bindParam(":StockMin", $minimo_stock_producto, PDO::PARAM_STR);
            $stmt->bindParam(":PrecioCompra", $precio_compra_producto, PDO::PARAM_STR);
            $stmt->bindParam(":PrecioVenta", $precio_venta_producto, PDO::PARAM_STR);
            /*  $stmt->bindParam(":ventas_producto", $ventas_producto, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_creacion_producto", $fecha, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_actualizacion_producto", $fecha, PDO::PARAM_STR);*/

            if ($stmt->execute()) {
                $resultado = "ok";
            } else {
                $resultado = "error";
            }
        } catch (Exception $e) {
            $resultado = 'Excepción capturada: ' .  $e->getMessage() . "\n";
        }

        return $resultado;

        $stmt = null;
    }
}
