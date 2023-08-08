<?php

include '../conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$origen=$_POST["origen_ame"];
$categoria=$_POST["categoria_ame"];
$nombre=$_POST["nombre_ame"];
$valor=$_POST["valor_ame"];
$descripcion=$_POST["descripcion_ame"];

$sqlInsert="INSERT INTO riesgos(origen_ame,categoria_ame,nombre_ame,valor_ame,descripcion_ame) 
VALUES ('$origen','$categoria','$nombre','$valor','$descripcion')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>