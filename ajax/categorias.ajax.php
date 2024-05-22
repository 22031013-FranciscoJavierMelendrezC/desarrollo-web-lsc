<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelos.php";

class ajaxcategorias{
    public $idcategoria;
    public $nombrecategoria; 

    public function ajaxListarCategoriasCombo()
   {
      $categorias = CategoriasControlador::ctrListarCategoriasCombo();
      echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
   }

    public function ajaxlistarcategorias(){

    $categorias = categoriascontrolador::ctrlistarcategorias();

    echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }


    public function registrarcategoria()
    {
      $categorias = categoriascontrolador::ctrRegistrarcategorias($this->idcategoria, $this->nombrecategoria);
      echo json_encode($categorias);
    }
}
if(isset($_POST['accion']) && $_POST['accion'] == 1){//parametro para listar categorias

    $categorias = new ajaxcategorias();
    $categorias -> ajaxlistarcategorias();

}
else if(isset($_POST['accion']) && $_POST['accion'] == 2){//parametro para listar categorias

    $registrarcategoria = new ajaxcategorias();
    $registrarcategoria -> idcategoria = $_POST["id_categoria"];
    $registrarcategoria -> nombrecategoria = $_POST["nombre_categoria"];
    $registrarcategoria -> registrarcategoria();
}
else
{
    $categorias = new AjaxCategorias();
    $categorias->ajaxListarCategoriasCombo();
 }