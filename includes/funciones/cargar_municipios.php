<?php require_once 'conexion.php';

function getMunicipios(){
    $mysqli = getConn();
    $query  = " SELECT id_municipio, nombre_municipio FROM municipios ";
              
    $result = $mysqli->query($query);
    $listas ='<option value  ="0">Elige tu Municipio</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $listas .= "<option value = '$row[id_municipio]'>$row[nombre_municipio]</option>";
    }
    return $listas;
}
echo getMunicipios();
?>
