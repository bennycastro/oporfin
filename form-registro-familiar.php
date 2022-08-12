<?php include_once 'includes/templates/header.php';?>
<link rel="stylesheet" href="css/estilos.css">
  
  <section class="seccion contenedor2">
    <h2 class="titulo">Cuéntanos <span  class="remarcado">un poco mas</span></h2>
    <?php
 session_start(); /*Abre la sesion */
     
     $_SESSION['estudios'] = htmlentities ($_POST["estudios"]);
     $estudios = $_SESSION['estudios'];
     
     $_SESSION['sit_laboral'] = htmlentities ($_POST["sit_laboral"]);
     $sit_laboral = $_SESSION['sit_laboral'];
         
     $_SESSION['empresa'] = htmlentities ($_POST["empresa"]);
     $empresa = $_SESSION['empresa'];
     
     $_SESSION['anti'] = htmlentities ($_POST["anti"]);
     $anti = $_SESSION['anti'];
  
     $_SESSION['industria'] = htmlentities ($_POST["industria"]);
     $industria = $_SESSION['industria'];

     $_SESSION['pensionado'] = htmlentities ($_POST["pensionado"]);
     $pensionado = $_SESSION['pensionado'];
     $_SESSION['institución'] = htmlentities ($_POST["institución"]);
     $institución = $_SESSION['institución'];
   
     ?>

<form action="form-registro-ingresos.php" class="formulario" method="post" id="formulario-familiar">

     
        <div class="formulario__grupo" id="grupo__estado_civil">
				<label for="estado_civil" class="formulario__label">Estado Civil</label>
				<div class="formulario__grupo-input">
        <select name="estado_civil" id="estado_civil" class="formulario__input"tabindex="1">

                        <option value ="null">Selecciona una Opción</option>

                        <option value ="soltero">Soltero/a</option>

                        <option value ="casado">Casado/a</option>
                        <option value ="unionl">Union Libre</option>
                        <option value ="divorciado">Divorciado/a</option>
                        <option value ="viudo">Viudo/a</option>

                        </select>
       

              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su nivel de estudios</p>
			</div>
      			<!-- Grupo: Situación-->
			<div class="formulario__grupo" id="grupo__motivo">
				<label for="motivo" class="formulario__label">¿Para que necesitas el préstamo?</label>
				<div class="formulario__grupo-input">
         
        <select name="motivo" id="motivo" class="formulario__input"tabindex="2">

            <option value ="null">Selecciona una Opción</option>
            <option value ="refin">Refinanciamiento</option>
            <option value ="pagar">Pagar Deudas</option>
            <option value ="viaje">Viaje</option>
            <option value ="gasto">Gastos Escolares</option>
            <option value ="compra">Compras</option>
            <option value ="impuls">Impulsar tu negocio</option>
            <option value ="emerg">Emergencias Médicas</option>
            <option value ="diver">Diversión</option>
            <option value ="auto">Mejoras a tu Auto</option>
            <option value ="hogar">Reparaciones en el Hogar</option>
            <option value ="otro">otro</option>
            
            </select>


              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su situación laboral</p>
			</div>

  <!--Mensajes-->
  <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button" id="siguiente" tabindex="3">Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
          
        </p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>
    
  


      		

   
</section>





      <?php include_once 'includes/templates/footer.php';?>
      <script src="js/formulario-familiar.js"></script>


