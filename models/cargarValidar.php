<?php
include 'conexion.php';
$SqlSelect= "SELECT id_act,nombre_act,tipo_act, valoracion_act from id WHERE valoracion_act IS null";
$respuesta= $conn->query($SqlSelect);
$result=array();
if($respuesta->num_rows>0){
while($filasActivos=$respuesta->fetch_assoc()){
array_push($result, $filasActivos);
}}
else{
    $result="no hay Activos";
}
echo json_encode($result);
?>