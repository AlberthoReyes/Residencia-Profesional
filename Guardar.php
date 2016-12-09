<?php

include "conexion.php";


$Nom=$_POST["Nom"];
$Ap_pat=$_POST["Ap_pat"];
$Ap_mat=$_POST["Ap_mat"];
$Fec_Nac=$_POST["Fec_Nac"];
$Edad=$_POST["Edad"];
$Dir=$_POST["Dir"];
$Loc=$_POST["Loc"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$dx=$_POST["dx"];
$Nom_T=$_POST["Nom_T"];
$Appat_T=$_POST["Appat_T"];
$Apmat_T=$_POST["Apmat_T"];


$sql="INSERT INTO rnutricio VALUES 
('$Nom','$Ap_pat','$Ap_mat','$Fec_Nac','$Edad','$Dir','$Loc','$peso','$talla','$dx','$Nom_T','$Appat_T','$Apmat_T')";
$result=mysqli_query($conexion,$sql);

if($result)
        { 
         echo "datos guardados exitosamente";
        }else
        {  
  	echo "Se produjo un error al momento de registar los datos: ".mysqli_error();
	}
mysqli_close($conexion);
?>
