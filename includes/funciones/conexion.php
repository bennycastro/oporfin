<?php
function getConn(){
        $mysqli = mysqli_connect('localhost', 'admin_oporfin', 'Benny0320053','oporfin');
            if(mysqli_connect_error($mysqli)){
                echo "Falló la conexión a la base de datos: " .mysqli_connect_error();
                $mysqli->set_charset('utf8');
                return $mysqli;
                 
            }
    ?>