<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>OPORFIN | Oportunidades Financieras</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
  <meta name="theme-color" content="#fafafa">
</head>
    <?php
 session_start(); /*Abre la sesion */
  $importe = $_SESSION['importe']; /*jala variable de session */
  $tipo_credito = $_SESSION['tipo_credito']; /*jala variable de session */
  $curp = $_SESSION['curp'];
  $motivo = $_SESSION['motivo'];
  $_SESSION['ingresos'] = htmlentities ($_POST["ingresos"]);
  $ingresos = $_SESSION['ingresos'];
 
 ?>
<?php include_once 'includes/templates/registrarSolicitud.php';?>
 <body onload="ventanaModal()"> 
        
   
<!--Ventana Mensaje-->
<div id="modal_container" class="modal-container">
  <div class="modal">
   <section>
      <h2>¡Muchas Felicidades!</h2>
      
      <div class="contenedor ">
        <ul>                    
          <li>
            <div >
              
              <p>Uno de nuestros asesores te contactará en un periodo no mayor a 24 horas  para darte excelentes noticias sobre tu solicitud.</p>
              
              <p>Te recordamos tener a la mano la documentación requerida.</p>
              <ul>
                <li>INE</li>
                <li>Comprobante de domicilio</li>
                <li>Comprobante de ingresos</li>
              </ul>
              <br>
             
                
            
            </div>
          </li>
         
        </ul>
      </div><div class="espacio"></div>
     </section>
    <a href="index.php" class="button">Cerrar</a>
    </div>
  </div><!--Cierre Ventana Mensaje-->

</section> 
</body>
</html>

<script>
function ventanaModal(){

modal_container.classList.add('show');  


}
</script>



