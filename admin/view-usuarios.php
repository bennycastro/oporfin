
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php include_once 'includes/funciones/funciones.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="card-title">Listado de Clientes</h3>
        </div> 
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
        <!-- /.card-header -->
        <table id="registros" class="table table-bordered table-striped">
    
                <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>

                <?php
                  try {
                    $sql = "SELECT * FROM cliente ";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }

                  while($cliente = $resultado->fetch_assoc() ) {  ?>
                      <tr>
                              <td><?php echo $cliente['primer_nombre'] . " " . $cliente['segundo_nombre'] . " " . $cliente['apell_pat'] . " " . $cliente['apell_mat']; ?></td>
                              <td><p><?php echo $cliente['num_cel']; ?></p></td>
                              <td><?php echo $cliente['correo']; ?></td>
                              <td>
                                  <a href="perfil.php?id=<?php echo $cliente['curp']; ?>" type="button" class="btn bg-green btn-flat margin"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                  <a href="perfil.php?id=<?php echo $cliente['curp']; ?>" type="button" class="btn bg-yellow btn-flat margin"> <i class="fas fa-print" aria-hidden="true"></i></a>
                                  <a href="perfil.php?id=<?php echo $cliente['curp']; ?>" type="button" class="btn bg-red btn-flat margin"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                             </td>
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                    <tr>
                    <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include_once 'includes/templates/footer.php';?>


<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
  <!-- jsGrid -->
 <link rel="stylesheet" href="plugins/jsgrid/jsgrid-them.min.css">


<!-- Page specific script -->
