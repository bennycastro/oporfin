
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php include_once 'includes/funciones/funciones.php';?>
<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<style>
  .dt-buttons{
    padding:20px;
    display:flex;

  }
</style>
<?php
if(isset($_GET['result']  ))
{
if($_GET['result']=='success')
{
  
?>
<script> 
Swal.fire(
  'Listo!',
  'La Solicitud fue Eliminada Correctamente!',
  'success' )
  </script>;

<?php
}
else{
  ?>
  <script> 
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'Algo Salio Mal al Intentar Borrar el Registro!',
    
  }) </script>;

<?php
  }
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-4">
          <h1 class="card-title"> Listado de Solicitudes</h1>
        </div>
         </div>   
  
      <table id="example1" class="table table-bordered table-striped">
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


                  //  $sql = "SELECT * FROM cliente , solicitud_cliente WHERE cliente.curp = solicitud_cliente.curp_cliente
                  
                    $sql = "SELECT * FROM solicitud_cliente 
                    INNER JOIN cliente ON solicitud_cliente.curp_cliente =cliente.curp
                    INNER JOIN tipos_credito ON solicitud_cliente.id_tipo_credito = tipos_credito.id_tipo_cred
                    ORDER BY id_solicitud DESC";
                   
                  
                  $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }

                  while($solicitud = $resultado->fetch_assoc() ) {  ?>
                      <tr>    
                              <td><?php echo $solicitud['id_solicitud']; ?></td>
                              <td><?php echo $solicitud['primer_nombre'] . " " . $solicitud['segundo_nombre'] . " " . $solicitud['apell_pat'] . " " . $solicitud['apell_mat']; ?></td>
                              <td><?php echo $solicitud['ingresos_comprobables']; ?></td>
                              <td><?php echo $solicitud['monto_solicitado']; ?></td>
                              <td><?php echo $solicitud['fecha_solicitud']; ?></td>
                              <td><?php echo $solicitud['nom_tipo_cred']; ?></td>
                              
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
      </div></div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 

  
</div>
<!-- ./wrapper -->

<?php include_once 'includes/templates/footer.php';?>
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

<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<script src="plugins/traduccion.js"></script>
<script>
  
 

  
</script>

<!--

-->