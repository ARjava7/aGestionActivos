<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST,GET,OPTION'); 
include '../conexion.php';
$id=$_POST['id'];
$nombre=$_POST["nombre_cont"];
$descripcion=$_POST["descripcion_cont"];
$relacionados=$_POST["relacionados_cont"];
$tipo=$_POST["tipo_cont"];
$SqlEditar="UPDATE riesgos SET nombre_cont = '$nombre',descripcion_cont = '$descripcion',
relacionados_cont = '$relacionados',tipo_cont = '$tipo' WHERE id = '$id'";

if($mysqli->query($SqlEditar)===TRUE){
    echo json_encode("Se valoró corretamente");
}else {
    echo json_encode("Error al editar ".$SqlEditar.$mysqli->error);
}
$mysqli->close();
?>