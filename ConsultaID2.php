<?php
include "conexion.php";
$Nom=$_POST["W"];
$sql="SELECT * FROM inconut WHERE Nom LIKE '%$Nom%' ORDER BY Nom";
$res= mysqli_query ($conexion, $sql);
     

if($res){
    $datos=array();
    $i=0;
    while ($fila=  mysqli_fetch_assoc($res)){
        $datos[$i]=$fila;
        $i=$i+1;
          }
    }
    else{
        echo"No se produjo ninguna respuesta: ".mysqli_error();
    }
    echo json_encode($datos);
    mysqli_close($conexion);
 
?>

