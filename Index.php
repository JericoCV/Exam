<?php
include_once "figura.php";
$Figura = new Figura();
$resultado = $Figura->mostrar();
echo "<table border='1'>";
$j=0;
echo "<tr>";
foreach ($resultado->fetchAll() as $k => $item){
echo "<td>".$item["id"]."<td>";
$j++;
if($j%20==0){
    echo "</tr>";
}
}
echo "</table>";

