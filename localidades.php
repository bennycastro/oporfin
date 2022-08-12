<?php
    require_once "models/Localidad.php";
    $tabla_localidades = new Localidad();
    $localidades = $tabla_localidades->obtener_localidad_select();