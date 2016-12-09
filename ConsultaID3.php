<?php
include "conexion.php";
$Nom=$_POST["W"];
$sql="SELECT * FROM discapacidad WHERE Nom LIKE '%$Nom%' ORDER BY Nom";
$res= mysqli_query ($conexion, $sql);
     

if($res){
    $datos=array();
    $i=0;
    while ($fila=  mysqli_fetch_assoc($res)){
        $datos[$i]=$fila;
        $i=$i+1;
          }
    }
    echo json_encode($datos);
    mysqli_close($conexion);
 
?>

