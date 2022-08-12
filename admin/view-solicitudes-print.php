
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php include_once 'includes/funciones/funciones.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Solicitudes de Crédito</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
              <!-- /.card-header -->


            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="solicitudes" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                            <th>Nombre</th>
                            <th>Ingresos Mensuales</th>
                            <th>Monto</th>
                            <th>Fecha de Solicitud</th>
                            <th>Tipo de Crédito</th>
                            <th></th>
                        </tr>
                </thead>
                <tbody>

                <?php
                  try {


                    $sql = "SELECT * FROM cliente , solicitud_cliente WHERE cliente.curp = solicitud_cliente.curp_cliente
                    ORDER BY id_solicitud DESC";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }

                  while($solicitud = $resultado->fetch_assoc() ) {  ?>
                      <tr>    
                              <td><?php echo $solicitud['id_solicitud']; ?></td>
                              <td><?php echo $solicitud['primer_nombre']; ?></td>
                              <td><?php echo $solicitud['ingresos_comprobables']; ?></td>
                              <td><?php echo $solicitud['monto_solicitado']; ?></td>
                              <td><?php echo $solicitud['id_tipo_credito']; ?></td>
                              <td><?php echo $solicitud['fecha_solicitud']; ?></td>
                              <td>
                                <div class="float-right">
                                  <a href="perfil.php?id=<?php echo $solicitud['curp_cliente']; ?>" type="button" class="btn bg-green btn-flat margin"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                  <a href="perfil.php?id=<?php echo $solicitud['curp_cliente']; ?>" type="button" class="btn bg-yellow btn-flat margin"> <i class="fas fa-print" aria-hidden="true"></i></a>
                                  <a href="includes/funciones/delete-solicitud.php?id_solicitud=<?php echo $solicitud['id_solicitud'];?>" type="button" class="btn bg-red btn-flat margin" id="eliminar"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                                  </div>
                             </td>
                             
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                    <tr><th>#</th>
                    <th>Nombre</th>
                            <th>Ingresos</th>
                            <th>Monto</th>
                            <th>Fecha de Solicitud</th>
                            <th>Tipo de Crédito</th>

                            <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#solicitudes").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#solicitudes').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
