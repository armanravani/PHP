<!-- 3. Write a PHP Code to create a file demo.txt and write your name into the file demo.txt. -->
<?php
$myfile = fopen("demo.txt", "w") or die("Unable to open file!");
$txt = "Dhruvesh\n";
fwrite($myfile, $txt);
fclose($myfile);
?>