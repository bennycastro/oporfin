<?php
   
     try {
        require_once ('includes/funciones/bd_conexion.php');
       
          $sql ="INSERT INTO `solicitud_cliente` (`id_solicitud`, `curp_cliente`, `monto_solicitado`, `motivo_prestamo`, `ingresos_comprobables`, `id_tipo_credito`, `fecha_solicitud`) VALUES
                              (NULL, '$curp', '$importe', '$motivo', '$ingresos', '$tipo_credito', NOW())  ";
              
              
           $resultado =$conn ->query($sql);
    
                                    
          } catch (\Exception $e)
          
          {
            echo $e->getMessage();
         }

   ?>   