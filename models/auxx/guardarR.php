<?php

include '../conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$categoria=$_POST["categoria"];
$clasificacion=$_POST["clasificacion"];
$valor=$_POST["valor"];


$sqlInsert="INSERT INTO riesgos(origen_ame,categoria_ame,nombre_ame,valor_ame,descripcion_ame) 
VALUES ('$origen','$categoria','$nombre','$valor','$descripcion')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>