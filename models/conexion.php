<?php
$serverName="localhost";
$userName="root";
$password="";
$dataName="activos";
$conn=mysqli_connect($serverName,$userName, $password, $dataName);
$mysqli=new mysqli($serverName,$userName, $password, $dataName);

if(!$mysqli){
die("Error en la conexión ".mysqli_connect_error());
}




?>