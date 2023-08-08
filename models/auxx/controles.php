<?php
include '../conexion.php';
$SqlSelect= "SELECT id,nombre_cont,descripcion_cont, relacionados_cont,tipo_cont from riesgos WHERE nombre_cont != ''";
$respuesta= $conn->query($SqlSelect);
$result=array();
if($respuesta->num_rows>0){
while($filasActivos=$respuesta->fetch_assoc()){
array_push($result, $filasActivos);
}}
else{
    $result="no hay Controles";
}
echo json_encode($result);
?>