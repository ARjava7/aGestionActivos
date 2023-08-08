<?php
include '../conexion.php';
$SqlSelect= "SELECT id,origen_ame,categoria_ame,nombre_ame,valor_ame, descripcion_ame from riesgos ";
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