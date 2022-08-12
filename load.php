<?php

$campo = isset($_POST['cp']) ? $conn->real_escape_string($_POST['cp']) : null;

try {
        require_once ('includes/funciones/bd_conexion.php');
        $sql =" SELECT * FROM colonias WHERE cp=$campo ";
        
        $resultado =$conn ->query($sql);
        
    } catch (\Exception $e){
        echo $e->getMessage();
    }
  
   

/* Mostrado resultados */

             while( $colonias = $resultado->fetch_assoc()){?>
              <option value="<?php  echo $colonias  ['id_colonia'];  ?> ;"> <?php  echo $colonias  ['nombre_colonia'];  ?> </option>
              
                <?php  }  ?>  </select>

