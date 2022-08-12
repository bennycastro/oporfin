<?php

    include_once 'includes/funciones/funciones.php';


    if($conn->ping())
    
    if(isset($_POST['agregar-admin'])){

      

        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    

        /*ENCRIPTA EL PASSWORD*/
        $opciones = array (
            'cost' => 12// ENTRE MAS ALTO EL COSTO MAYOR SEGURIDAD, MENOS RENDIMIENTO
        );
        $password_hashed = password_hash($password,PASSWORD_BCRYPT,$opciones);//ENCRIPTA Y ASIGNA EL VALOR DE 60 CARACTERES A UNA NUEVA VARIABLE
       
        try {
            include_once '../includes/funciones/bd_conexion.php';
            $stmt = $conn->prepare("INSERT INTO admins (usuario , nombre , email , password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss",$usuario, $nombre, $email, $password_hashed );//SE ENVIA LA VARIABLE CON LA CONTRASEÑA ENCRIPTADA
            $stmt->execute();

            if(mysqli_affected_rows($conn)>0) {
                header('location:crear-admin.php?result=success');
            } else {
               header('location:crear-admin.php?result=fail');
            }
           
                        
            $stmt->close();
            $conn->close();
                      
         
            
        } catch (\Exception $e){
            header('location:crear-admin.php?result=fail');
            //echo $e->getMessage();
        }
      
} 
?>

