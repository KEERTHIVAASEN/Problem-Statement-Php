<html>
 <head>
 <title> MULTIPLICATION TABLE</title>
 <h1><center> MULTIPLICATION TABLE</center></h1>
</head>
<body>
<form method="POST">
Enter Table Value
<input type="text" name="number">
<input type="submit" value="Result">
</body>
</html>
<?php
 if($_POST)
{
$num = $_POST['number'];
echo "<br/><br/><br/><b>Multiplication table of $num is given 
below</b> <br/><br/>";
for($i = 1; $i <=15; $i++)
{
echo "$i x $num=",$i * $num;
echo "<br/>";
}
}
?>