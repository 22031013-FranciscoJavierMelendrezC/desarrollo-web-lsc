<?php

class categoriascontrolador
{
    static public function ctrlistarcategorias()
    {
        $categorias = categoriasmodelo::mdlistarcategoria();

        return $categorias;
    }


    static public function ctrRegistrarcategorias(
        $id_categoria,
        $nombre_categoria
    ) {
        $registrocategoria = categoriasmodelo::mdlregistrarcategorias(
            $id_categoria,
            $nombre_categoria
        );

        return $registrocategoria;
    }

    static public function ctrListarCategoriasCombo()
    {
        $respuesta = CategoriasModelo::mdlConsultarCombo();
        return $respuesta;
    }


}
