<html>
<head>
<title>VALID EMAIL</title>
<h1>VALID AN EMAIL ADDRESS</h1>
</head>
<body>
<form method="POST">
ENTER A VALUE
<input type ="text" name ="EMAIL">
<input type ="submit" value="validate">
</body>
</html>
<?php
 if($_POST)
{
 echo "<br/><br/><br/> <br/><br/>";
 $email = $_POST['EMAIL'];
 if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
 {
 echo("$email is a valid email address");
 } 
 else 
 {
 echo("$email is not a valid email address");
 }
}
?>