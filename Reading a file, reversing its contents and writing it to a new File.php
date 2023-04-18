<?php
echo "<h3>Reading a file, reversing its contents and writing it to a new File</h3>";
$inputfile=fopen("angry.txt","r")or die("Unable to open file for reading");
$originaldata=file_get_contents("angry.txt");
echo "<br><b><i><u>Contents of the source file:</b></i></u><br>".$originaldata;
$reverseddata=strrev($originaldata);
$newfile=fopen("destination.txt","w") or die("Unable to open file for writing");
file_put_contents("destination.txt",$reverseddata);
$data =file_get_contents("destination.txt");
echo "<br><b><i><u>Reversed Contents of the destination 
file:</b></i></u><br>".$data;
fclose($inputfile);
fclose($newfile);
?>
