<html>
 <head>
<title> FACTORIAL </title>
<h1><center> FINDING FACTORIAL OF A GIVEN NUMBER</center></h1>
</head>
<body>
<form method="POST">
Enter A NUMBER
<input type="text" name="number">
<input type="submit" value="Result">
</body>
</html>
<?php
 if($_POST)
{
echo "<br/><br/>";
$num = $_POST['number'];
function fact($num)
{
if($num == 0 || $num == 1)
return 1;
else
return $num * fact($num - 1); //recursive function call
}
echo "factorial=",fact($num); //function call
}
?>