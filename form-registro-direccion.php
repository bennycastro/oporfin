<?php include_once 'includes/templates/header.php';?>
<link rel="stylesheet" href="css/estilos.css">

  
<section class="seccion contenedor2">
    <h2 class="titulo">¡Hola! <span  class="remarcado">¿Cual es tu nombre?</span></h2></dection>
    <form action="form-registro-educacion-trabajo.php" class="formulario" method="post" id="formulario-direccion">
    <?php
 session_start(); /*Abre la sesion */

   
     $_SESSION['correo'] = htmlentities ($_POST["correo"]);
     $correo = $_SESSION['correo'];
    

     $_SESSION['password'] = htmlentities ($_POST["password"]);
     $password = $_SESSION['password'];
     
   
     if (isset($_POST['notificaciones'])) {
            $_SESSION['notificaciones'] = 1;
            $notificaciones = $_SESSION['notificaciones'];
            
            }
            else{
              $_SESSION['notificaciones'] = 0;
              $notificaciones = $_SESSION['notificaciones'];
              
            }
  
         
   
   
     ?>

    
			<!-- Grupo: Tipo de Vivienda -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Tipo de Vivienda</label>
				<div class="formulario__grupo-input">
          
					  <select id="vivienda" name="vivienda"  class="formulario__input" tabindex="1" required>
              <option selected>Selecciona una opción</option>
              <option>Rento</option> 
              <option>Casa Propia</option>
              <option>Casa de algun familiar o amigo</option></select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de vivienda</p>
			</div>
      <!-- Grupo: Calle -->
			<div class="formulario__grupo" id="grupo__calle">
				<label for="calle" class="formulario__label">Calle</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="calle" id="calle" tabindex="2" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el nombre de su calle.</p>
			</div>

	  <!-- Grupo: Num Exterior -->
     <div class="formulario__grupo" id="grupo__num_ext">
				<label for="num_ext" class="formulario__label">Número Exterior</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="num_ext" id="num_ext" tabindex="3" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca número exterior válido de su domicilio</p>
			</div>
      <!-- Grupo: Num Inteior -->
			<div class="formulario__grupo" id="grupo__num_int">
				<label for="num_int" class="formulario__label">Número Interior</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="num_int" id="num_int" tabindex="4" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el número interior válido de su domicilio</p>
			</div>
        <!-- Grupo: CP -->
			<div class="formulario__grupo" id="grupo__cp">

				<label for="cp" class="formulario__label">Código Postal</label>
				<div class="formulario__grupo-input">
        <?php
                    
                        
        ?>  
					<input type="text" class="formulario__input" name="cp" id="cp" tabindex="5" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el número interior de su domicilio</p>
			</div>
        <!-- Grupo: Colonia -->
				<div class="formulario__grupo" id="grupo__colonias">

        <?php
            try {
                require_once ('includes/funciones/bd_conexion.php');
                $sql =" SELECT id_colonia, nombre_colonia FROM colonias";
                              
                 $resultado =$conn ->query($sql);
                              
                 } catch (\Exception $e){
                    echo $e->getMessage();
                }
                        
        ?>
        
				<label for="colonias" class="formulario__label">Colonia</label>
				<div class="formulario__grupo-input">
           <select name="colonias" id="colonias" class="formulario__input"  tabindex="6" required>
            
             <?php 
             while( $colonias = $resultado->fetch_assoc()){?>
              <option value="<?php  echo $colonias  ['id_colonia'];  ?> ;"> <?php  echo $colonias  ['nombre_colonia'];?> </option>
              
                <?php  }  ?>  </select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu colonia</p>
			</div>


  
         <!-- Grupo: alcaldía -->
				<div class="formulario__grupo" id="grupo__nombre">
        <?php
                      try {
                              require_once ('includes/funciones/bd_conexion.php');
                              $sql =" SELECT id_municipio, nombre_municipio FROM municipios ";
                              
                              $resultado =$conn ->query($sql);
                              
                          } catch (\Exception $e){
                              echo $e->getMessage();
                          }
                        
        ?>    
        
				<label for="municipios" class="formulario__label">Alcaldía</label>
				<div class="formulario__grupo-input">
          
        <select name="municipios"class="formulario__input"  tabindex="7"required>
                      <option> Selecciona tu Alcaldía</option>
                      <?php
                   while( $municipios = $resultado->fetch_assoc()){?>
                   <option> <?php  echo $municipios  ['nombre_municipio'];  ?> </option>
                   
                    <?php  }  ?>
                    </select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu alcaldía</p>
			</div>
         <!-- Grupo: ciudad -->
				<div class="formulario__grupo" id="grupo__nombre">
        
        <?php
        try {                 require_once ('includes/funciones/bd_conexion.php');
                              $sql =" SELECT id_ciudad, nombre_ciudad FROM ciudades ";
                              
                              $resultado =$conn ->query($sql);
                              
                          } catch (\Exception $e){
                              echo $e->getMessage();
                          }
                        
                      ?>    
				<label for="ciudades" class="formulario__label">Ciudad</label>
				<div class="formulario__grupo-input">
          
					  <select name="ciudades" id="ciudades" class="formulario__input" tabindex="8" required>
            <?php
                   while( $ciudad = $resultado->fetch_assoc()){?>
                   <option> <?php  echo $ciudad  ['nombre_ciudad'];  ?> </option>
                   
                    <?php  }  ?>
                    </select>
                    </div>
                    <?php
                    $conn->close();
                    ?>
</select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu ciudad</p>
			</div>

      <!--Mensajes-->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button" tabindex="9" required>Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>
    
  
</section>




      <?php include_once 'includes/templates/footer.php';?>
      <script src="js/formulario-direccion.js"></script>

      <script>
        /* Llamando a la funci�n getData() */
        getData()
        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la funci�n getData. */
        document.getElementById("cp").addEventListener("blur", getData)
        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("cp").value
            let content = document.getElementById("content")
            let url = "load.php"
            let formaData = new FormData()
            formaData.append('cp', input)
            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>