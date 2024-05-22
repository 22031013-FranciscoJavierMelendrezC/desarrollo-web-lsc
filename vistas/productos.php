    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Producto</title>
    </head>
    <body>
        

         <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inventario / Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Inventario / Productos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- Main content -->
<div class="content">

<div class="container-fluid">

    <!-- row para criterios de busqueda -->
    <div class="row">

        <div class="col-lg-12">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                            <i class="fas fa-times"></i>
                        </button>
                    </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
                <div class="card-body">

                    <div class="row">

                        <div class="d-none d-md-flex col-md-12 ">

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                <label for="iptCodigoBarras">Código de Barras</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                <label for="iptCategoria">Categoría</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptProducto" class="form-control" data-index="5">
                                <label for="iptProducto">Producto</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptPrecioVentaDesde" class="form-control">
                                <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptPrecioVentaHasta" class="form-control">
                                <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                            </div>
                        </div>

                        <div class="d-block d-sm-none">

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                <label for="iptCodigoBarras">Código de Barras</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                <label for="iptCategoria">Categoría</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptProducto" class="form-control" data-index="5">
                                <label for="iptProducto">Producto</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptPrecioVentaDesde" class="form-control">
                                <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptPrecioVentaHasta" class="form-control">
                                <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                            </div>
                        </div>

                    </div>
                </div> <!-- ./ end card-body -->
            </div>

        </div>

    </div>

    <!-- row para listado de productos/inventario -->
    <div class="row">
        <div class="col-lg-12">
            <table id="tbl_productos" class="table table-striped w-100 shadow">
                <thead class="bg-info">
                    <tr style="font-size: 15px;">
                        <th></th>
                        <th>Codigo</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Stock</th>
                        <th>Min_Stock</th>
                        <th>PrecioCompra</th>
                        <th>PrecioVenta</th>
                        <th>utilidad</th> 
                        <th>Fecha de creacion</th> 
                        <th class="text-cetner">Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-small">
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.container-fluid -->

</div>
<!-- /.content -->


<!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Producto</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->
                    <div class="row">

                        <!-- Columna para registro del codigo de barras -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Código de Barras</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCodigoReg"
                                    name="iptCodigoReg" placeholder="Código de Barras" required>
                                <div class="invalid-feedback">Debe ingresar el codigo de barras</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la categoría del producto -->
                        <div class="col-12  col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Categoría</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selCategoriaReg" required>
                                </select>
                                <div class="invalid-feedback">Seleccione la categoría</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la descripción del producto -->
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptDescripcionReg"><i
                                        class="fas fa-file-signature fs-6"></i> <span
                                        class="small">Descripción</span><span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="iptDescripcionReg"
                                    placeholder="Descripción" required>
                                <div class="invalid-feedback">Debe ingresar la descripción</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Precio de Compra -->
                        <div class="col-12  col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioCompraReg"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                        Compra</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" step="0.01"
                                    id="iptPrecioCompraReg" placeholder="Precio de Compra" required>
                                <div class="invalid-feedback">Debe ingresar el Precio de compra</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Precio de Venta -->
                        <div class="col-12 col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioVentaReg"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                        Venta</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg"
                                    placeholder="Precio de Venta" step="0.01" required>
                                <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la Utilidad -->
                        <div class="col-12 col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptUtilidadReg"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Utilidad</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptUtilidadReg"
                                    placeholder="Utilidad" disabled>
                            </div>
                        </div>

                        <!-- Columna para registro del Stock del producto -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                    <span class="small">Stock</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                    placeholder="Stock" required>
                                <div class="invalid-feedback">Debe ingresar el stock</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Minimo de Stock -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptMinimoStockReg"><i
                                        class="fas fa-minus-circle fs-6"></i> <span class="small">Mínimo
                                        Stock</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                    placeholder="Mínimo Stock" required>
                                <div class="invalid-feedback">Debe ingresar el minimo stock</div>
                            </div>
                        </div>

                        <!-- creacion de botones para cancelar y guardar el producto -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                        <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                            id="btnGuardarProducto">Guardar Producto</button>
                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                    </div>
                </form>
            
            </div>

        </div>
    </div>


</div>
<!-- /. End Ventana Modal para ingreso de Productos -->


    </body>
    </html>
    
   


<script>
  var accion;
  var table;
  var operacion_stock = 0;

//iniciamos el mensaje de tipo toast
  var toast = swal.mixin({
    toast: true,
    position: 'top',
    showconfirmbutton: false,
    timer: 3000
  });

  $(document).ready(function(){
    table = $("#tbl_productos").DataTable({
      dom: 'Bfrtip',
      buttons: [{
          text: 'Agregar ',
          className: 'addNewRecord',
          action: function(e, dt, node, config) {
            $("#mdlGestionarProducto").modal('show');
            accion = 2; //registrar
          }
        },'excel',
        'print', 'pageLength'
      ],
      pageLength: [5, 10, 15, 30, 50, 100],
      pageLength: 10,
      ajax: {
        url: "/pdv/ajax/productos.ajax.php",
        dataSrc: '',
        type: "POST",
        data: {
          'accion': 1 //1: LISTAR categorias
        },
      },
      responsive: {
        details: {
          type: 'column'
        }
      },
      columnDefs: [{
          targets: 0,
          orderable: false,
          className: 'control'
        },
        {
          targets: 1,
          visible: true
        },
        {
          targets: 2,
          visible: true
        },
        {
          targets: 9,
          orderable: false,
          render: function(data, type, full, meta) {
            return "<center>" +
              "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-pencil-alt fs-5'></i>" +
              "</span>" +
              "<span class='btnEliminarCategoria text-danger px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-trash fs-5'></i>" +
              "</span>" +
              "</center>"
          }
        }

      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
      }
    })

    

  });

  
  /*===================================================================//
    //SOLICITUD AJAX PARA CARGAR SELECT DE CATEGORIAS
  //===================================================================*/
    $.ajax({
        url: "ajax/categorias.ajax.php",
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

            var options = '<option selected value="">Seleccione una categoría</option>';

            for (let index = 0; index < respuesta.length; index++) {
                options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][
                    1
                ] + '</option>';
            }

            $("#selCategoriaReg").append(options);
        }
    });
    
    //===================================================================/
//EVENTO QUE GUARDA LOS DATOS DEL PRODUCTO, PREVIA VALIDACION DEL INGRESO DE LOS DATOS OBLIGATORIOS
//===================================================================/
document.getElementById("btnGuardarProducto").addEventListener("click", function() {

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

        if (form.checkValidity() === true) {   

            console.log("Listo para registrar el producto")

            Swal.fire({
                title: 'Está seguro de registrar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, deseo registrarlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", accion);
                    datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
                    datos.append("id_categoria_producto", $("#selCategoriaReg").val()); //id_categoria_producto
                    datos.append("descripcion_producto", $("#iptDescripcionReg").val()); //descripcion_producto
                    datos.append("precio_compra_producto", $("#iptPrecioCompraReg").val()); //precio_compra_producto
                    datos.append("precio_venta_producto", $("#iptPrecioVentaReg").val()); //precio_venta_producto
                    datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
                    datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
                    datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val()); //minimo_stock_producto  
                    datos.append("ventas_producto", 0); //ventas_producto

                    if(accion == 2){
                        var titulo_msj = "El producto se registró correctamente"
                    }

                    if(accion == 4){
                        var titulo_msj = "El producto se actualizó correctamente"
                    }

                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {

                            if (respuesta == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: titulo_msj
                                });

                                table.ajax.reload();

                                $("#mdlGestionarProducto").modal('hide');

                                $("#iptCodigoReg").val("");
                                $("#selCategoriaReg").val(0);
                                $("#iptDescripcionReg").val("");
                                $("#iptPrecioCompraReg").val("");
                                $("#iptPrecioVentaReg").val("");
                                $("#iptUtilidadReg").val("");
                                $("#iptStockReg").val("");
                                $("#iptMinimoStockReg").val("");

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'El producto no se pudo registrar'
                                });
                            }

                        }
                    });

                }
            })
        }else {
            console.log("No paso la validacion")
        }

        form.classList.add('was-validated');

    });
});


$("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

$("#validate_id").css("display", "none");
$("#validate_sustancia").css("display", "none");
$("#validate_marca").css("display", "none");
$("#validate_descripcion").css("display", "none");
$("#validate_precio").css("display", "none");

$("#iptId_ProductoReg").val("");
$("#selSAReg").val(0);
$("#selMarcaReg").val(0);
$("#iptDescripcion_ProductoReg").val("");
$("#iptPrecio_ProductoReg").val("");
$("#mdlGestionarProducto").modal('hide');
})

</script>