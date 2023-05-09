<?php

include 'conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$ubi=$_POST["ubi_act"];
$depar=$_POST["depar_act"];
$tipo=$_POST["tipo_act"];
$categ=$_POST["categ_act"];
$clasif=$_POST["clasif_act"];
$nombre=$_POST["nombre_act"];
$tipoInfo=$_POST["tipo_info"];
$responsable=$_POST["responsable_act"];

$sqlInsert="INSERT INTO id(ubi_act,depar_act, tipo_act, categ_act, clasif_act, nombre_act, tipo_info,responsable_act) 
VALUES ('$ubi','$depar','$tipo','$categ','$clasif','$nombre','$tipoInfo','$responsable')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>