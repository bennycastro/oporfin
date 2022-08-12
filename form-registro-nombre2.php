<?php include_once 'includes/templates/header.php';?>

   
  <section class="seccion contenedor2">
  <h2 class="titulo">Completa tu información <span  class="remarcado"> para continuar </span></h2>
  
<form  id="regitro caja-1-row " class="registro" action="form-registro-mail.php" method="post">
<input type="hidden" name="variable" value="<? echo $_GET['variable'];?>">


<div class="registro caja">
<div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" class="format-input" id="nombre" name="nombre"  tabindex="1" autocomplete="off" required>
          </div>
          <div class="campo">
            <label for="segundo-nombre">Segundo Nombre/label>
            <input type="text"class="format-input" id="segundo-nombre" name="segundo-nombre" tabindex="2"autocomplete="off" >
          </div></div>
          <div class="campo">
            <label for="apellido-paterno">Apellido paterno</label>
            <input type="text"class="format-input" id="apellido-paterno" name="apellido-paterno" tabindex="3"autocomplete="off" required>
          </div>
          <div class="campo">
            <label for="apellido-materno">Apellido materno</label>
            <input type="text"class="format-input" id="apellido-materno" name="apellido-materno" tabindex="4"autocomplete="off" required>
          </div>
          <div class="campo">
            <label for="apellido-materno">Apellido materno</label>
            <input type="text"class="format-input" id="celular" name="apellido-materno" tabindex="4"autocomplete="off" required>
          </div></div>

          <div id="error" class="error"></div>
          <div class="campo">
              <div class="g-recaptcha" data-sitekey="6Lc7n-EgAAAAAPAAAiLqGZXhSalYg7bHIBe02bxd"> </div>
              </div>
     
            <div id="botones" >
              <div class="atras">
              <a href="form-registro-name.php"><input type="button" id="atras" class="button" value="Atrás""> </a>
               </div>
              <div class="siguiente">
              <input type="submit" class="button" value="Siguiente"tabindex="4">
              </div>      
          </div>
      
       
        

         
        </form>
      </section> 

<?php include_once 'includes/templates/footer.php';?>


