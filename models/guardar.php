<?php

include 'conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$ubi=$_POST["ubi_act"];
$depar=$_POST["depar_act"];
$clasif=$_POST["clasif_act"];
$nombre=$_POST["nombre_act"];
$responsable=$_POST["responsable_act"];

$sqlInsert="INSERT INTO id(ubi_act,depar_act,  clasif_act, nombre_act,responsable_act) 
VALUES ('$ubi','$depar','$clasif','$nombre','$responsable')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>