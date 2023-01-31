<?php
$rows = 4;
$cols = 4;
$arr = array(
array(1,2,3,4),
array(5,6,7,8),
array(9,10,11,12),
array(13,14,15,16)
);
echo "Original Table:<br>";
print_r($arr);
echo '<br><table border="1">';
echo "<tr><th><th>col1<th>col2<th>col3<th>col4<th>Rowsum</tr>";
echo "<br>";
echo "Table with Sums of rows and sums of columns: <br>";
for($i=0; $i<$rows; $i++)
{
echo "<tr><td>row ".$i+1;
$rowsum = 0;
for($j=0; $j<$cols; $j++)
{
echo "<td>".$arr[$i][$j];
$rowsum = $rowsum + $arr[$i][$j];
}
echo "<td><b>".$rowsum."</b></tr>";
}
echo "<tr><td><b>Colsum</b>";
for($j=0; $j<$cols; $j++)
{
$colsum = 0;
for($i=0; $i<$rows; $i++)
{
$colsum = $colsum + $arr[$i][$j];
}
echo "<td><b>".$colsum."</b>";
}
 echo "</tr></table>";
?>
