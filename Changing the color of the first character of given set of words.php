<?php
$txt = "Mahindra Singh Dhoni";
// The preg_replace is used here to replace the
// color of first character of the word
$txt = preg_replace('/(\b[a-z])/i',
'<span style="color:red;">\1</span>', $txt);
// Display the text value
echo $txt;
?>