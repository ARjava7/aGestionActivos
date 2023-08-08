<?php

include 'conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$categoria=$_POST["categoria"];
$clasificacion=$_POST["clasificacion"];
$valor=$_POST["valor"];

$sqlInsert="INSERT INTO r(nombre,descripcion,  categoria, clasificacion,valor) 
VALUES ('$nombre','$descripcion','$categoria','$clasificacion','$valor')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>