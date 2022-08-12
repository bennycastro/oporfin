<?php
    require_once "connection/Connection.php";

    class Localidad {

        public function obtener_localidad_select($id_municipio) {
            $db = new Connection();
            $query = "SELECT id, nombre FROM localidades WHERE municipio_id = $id_municipio";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while ($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                    ];
                }//end while
            }//end if
            return $datos;
        }//end obtener_municipios_select

    }//end class Municipio