<html>
<head>
<title> sum of prime numbers program</title>
<h1>SUM OF PRIME NUMBERS PROGRAM</h1>
</head>
<body>
<form method="POST">
<center>
ENTER A MIN VALUE &nbsp<input type ="text" name ="number1"><br/> <br/>
ENTER A MAX VALUE &nbsp<input type ="text" name ="number2">
<br/><br/><br/>
<input type ="submit" value="GET SUM">
</center>
</body>
</html>
<?php
 if($_POST)
{
 echo "<br/><br/><br/><b><center>SUM OF THE PRIME NUMBER IS</b>";
 $min = $_POST['number1'];
 $max = $_POST['number2'];
 $sum = 0;
 for($num = $min;$num<=$max;$num++)
 {
 $count = 0;
 for($i=2;$i<=sqrt($num);$i++)
 {
 if($num % $i == 0)
 {
 $count++;
 break;
 }
 }
 if($count==0 && $num!= 1)
 $sum = $sum + $num;
}
echo "<b> $sum </b></center>";
}
?>