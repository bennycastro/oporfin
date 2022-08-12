<?php 
  include_once '../../../includes/funciones/bd_conexion.php';

 if(isset($_GET['id_solicitud'])){
    $ID = $_GET['id_solicitud'];
    $sql_delete = "DELETE FROM solicitud_cliente WHERE id_solicitud = $ID";        
    $result = mysqli_query($conn,$sql_delete);
    if(mysqli_affected_rows($conn)>0) {
        header('location:../../view-solicitudes.php?result=success');
    } else {
       header('location:../../view-solicitudes.php?result=fail');
    }
   }
   ?>