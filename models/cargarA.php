<?php
include 'conexion.php';
$SqlSelect= "select * from r ";
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