<?php

$link = mysql_connect("localhost", "root");
mysql_select_db("alimentos_dif", $link);
$sql = "SELECT * FROM rnutricio where Nom LIKE '$buscar' ORDER BY Nom";
$result = mysql_query($sql, $link);
if ($row = mysql_fetch_array($result)){
echo "<table border = '1'> \n";
//Mostramos los nombres de las tablas

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
echo "<td><b>$field->name</b></td> \n";
}
echo "</tr> \n";
do {
echo "<tr> \n";
echo "<td>".$row["ID_N"]."</td> \n";
echo "<td>".$row["Nom"]."</td> \n";
echo "<td>".$row["Ap_pat"]."</td> \n";
echo "<td>".$row["Ap_mat"]."</td> \n";

}
while ($row = mysql_fetch_array($result));
echo "<p><a href=buscador_bd.htm>Volver</p> \n";
echo "</table> \n";
} else {
echo "<p>¡No se ha encontrado ningún registro!</p>\n";
echo "<p><a href=buscador_bd.htm>Volver</p> \n";
}
?>