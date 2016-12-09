<?php

include "conexion.php";

$ID_N=$_POST["ID_N"];
$Nom=$_POST["Nom"];
$Ap_pat=$_POST["Ap_pat"];
$Ap_mat=$_POST["Ap_mat"];
$Fec_Nac=$_POST["Fec_Nac"];
$Dir=$_POST["Dir"];
$Loc=$_POST["Loc"];
$dx=$_POST["dx"];
$Nom_T=$_POST["Nom_T"];
$Appat_T=$_POST["Appat_T"];
$Apmat_T=$_POST["Apmat_T"];
$Tel=$_POST["Tel"];


$sql="INSERT INTO discapacidad VALUES 
('$ID_N','$Nom','$Ap_pat','$Ap_mat','$Fec_Nac','$Dir','$Loc','$dx','$Nom_T','$Appat_T','$Apmat_T','$Tel')";
$result=mysql_query($sql,$conexion);
if($result){
  echo "datos guardados exitosamente";

}else{
  echo "Error al guardar la informaci�n: ".mysql_error();
}
mysql_close($conexion);
?>
