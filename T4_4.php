<!-- 4. Write a PHP code to append your enrollment number and address in the file demo.txt. -->
<?php
$myfile = fopen("demo.txt", "w") or die("Unable to open file!");
$txt = "21SDSCE01111\n";
fwrite($myfile, $txt);
$txt = "Moti monpari\n";
fwrite($myfile, $txt);
fclose($myfile);
?>