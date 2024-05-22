<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Market POS</title>

  <!--sweetalert2-->
  <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">

  
<!--
    ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
   
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>

<!--swettalert2-->
<script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

 <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <!--<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>-->        
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.9.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php
include "modulos/navbar.php";
include "modulos/aside.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php include "vistas/dashboard.php" ?>
  
  </div>
  <!-- /.content-wrapper -->

  <?php
include "modulos/footer.php";
?>

</div>
<!-- ./wrapper -->

<script> 
   function CargarContenido(pagina_php,contenedor){
  $("." + contenedor).load(pagina_php);
   }
</script>

</body>
</html>