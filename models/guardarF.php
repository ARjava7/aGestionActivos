<?php

include 'conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$a=$_POST["a"];
$v=$_POST["v"];
$c=$_POST["c"];
$i=$_POST["i"];
$p=$_POST["p"];
$resultado = $i * $p;

$sqlInsert="INSERT INTO f(a,v,  c, i,p,n) 
VALUES ('$a','$v','$c','$i','$p',$resultado)";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$SqlInsert.$mysqli->error);
}

$mysqli->close();

?>