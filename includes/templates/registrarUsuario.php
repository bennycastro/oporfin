<?php
      /*qUERY PARA INSERTAR LOS DATOS DE LA TABLA CLIENTE*/
      try {
        require_once ('includes/funciones/bd_conexion.php');
           
          $sql =" INSERT INTO cliente 
          (`curp`, `primer_nombre`, `segundo_nombre`, `apell_pat`, `apell_mat`, `num_cel`, `num_casa`, `correo`,`contrasena`,`registro_newsletter`,`tipo_vivienda`,`calle`,`num_ext`,`num_int`, `id_colonia`, `edo_civil`,
          `nivel_estudios`,`situación_laboral`, `empresa`, `antiguedad`, `industria`,`pensionado`,`institucion`) 
          VALUES 
          ('$curp', '$nombre', '$segundo_nombre', '$apellido_paterno', '$apellido_materno', '$num_celular',
      '$num_casa', '$correo','$password_hashed','$notificaciones','$vivienda','$calle', '$num_ext', '$num_int','$colonias','$estado_civil','$estudios', '$sit_laboral', '$empresa', '$anti', '$industria', '$pensionado', '$institución')
      /*SI EL CLIENTE YA ESTA REGISTRADO, VALIDA EL CURP Y ACTUALIZA EL REGISTRO COMPLETO DEL CLIENTE*/
      ON DUPLICATE KEY UPDATE primer_nombre = '$nombre',
                              segundo_nombre = '$segundo_nombre',
                               apell_pat ='$apellido_paterno',
                               apell_mat ='$apellido_materno',
                               num_cel= '$num_celular',
                               num_casa='$num_casa',
                               correo= '$correo',
                               contrasena='$password_hashed',
                               registro_newsletter= '$notificaciones',
                               tipo_vivienda='$vivienda',
                               calle='$calle',
                               num_ext= '$num_ext',
                               num_int='$num_int',
                               id_colonia='$colonias',
                               edo_civil='$estado_civil',
                               nivel_estudios='$estudios',
                               situación_laboral= '$sit_laboral',
                               empresa='$empresa',
                               antiguedad='$anti',
                               industria='$industria',
                               pensionado='$pensionado',
                               institucion ='$institución'     
                               ";

           $resultado =$conn ->query($sql);
                                    
          } catch (\Exception $e){
            echo $e->getMessage();
         }

   ?>