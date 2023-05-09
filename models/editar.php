<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST,GET,OPTION'); 
include 'conexion.php';
$id=$_POST['id_act'];
$valor=$_POST["valoracion_act"];
$SqlEditar="UPDATE id SET valoracion_act = '$valor' WHERE id_act = '$id'";

if($mysqli->query($SqlEditar)===TRUE){
    echo json_encode("Se edito corretamente");
}else {
    echo json_encode("Error al editar ".$SqlEditar.$mysqli->error);
}
$mysqli->close();
?>
