<?php
    require("Modelo/conexion.php");
    $con = new conexion();
    $personas = $con->Getdatos();
    require("Vista/v_personas.php");
?>