<?php
echo "<table border='1'>";
$j=0;
echo "<tr>";
for($i=1; $i<=669; $i++){
echo "<td>".$i."<td>";
if($i%20==0){
    echo "</tr>";
}

}
echo "</table>";
