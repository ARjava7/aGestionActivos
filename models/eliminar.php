<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST,GET,OPTION');
include 'conexion.php';
$id=$_REQUEST['id_act'];
$SqlDelete="DELETE FROM id WHERE id_act = '$id'";
if($mysqli->query($SqlDelete)===TRUE){
    echo json_encode("Se borro corretamente");
}else {
    echo json_encode("Error al borrar".$SqlDelete.$mysqli->error);
}
$mysqli->close();
?>