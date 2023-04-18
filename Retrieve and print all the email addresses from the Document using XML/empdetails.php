<?php
$xml = simplexml_load_file("email.xml") 
or die("unable to load XML");
echo "there are ".count($xml->employee)." employees working 
in this company";
echo "<br> Employee ID and their E-mail Addresses are :";
foreach($xml->employee as $emp)
{
echo "<br>".$emp->empid;
echo " - ".$emp->empname;
echo " - ".$emp->email;
}
?>
