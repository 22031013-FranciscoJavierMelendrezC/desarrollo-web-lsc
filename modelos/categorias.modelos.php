<?php

require_once "conexion.php";

class categoriasmodelo{
    
    
    static public function mdlistarcategoria(){

        $stmt = conexion::conectar()->prepare("SELECT '' AS VALORES,IdCategoria,Descripcion,'' as opciones from categoria
        order by Descripcion desc");

        $stmt->execute();

        return $stmt->fetchall();
    }
    /*===================================================================
    REGISTRAR CATEGORIAS
    ====================================================================*/
    static public function mdlRegistrarCategorias($id_categoria, $nombre_categoria)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO CATEGORIA(idCategoria,Descripcion) 
                                                VALUES (:id_Categoria,:nombre_Categoria)");
            $stmt->bindParam(":id_Categoria", $id_categoria, PDO::PARAM_STR);
            $stmt->bindParam(":nombre_Categoria", $nombre_categoria, PDO::PARAM_STR);
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



    static public function mdlConsultarCombo()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM CATEGORIA ORDER BY Descripcion asc");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}