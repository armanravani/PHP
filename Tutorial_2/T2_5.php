<!-- 5.Write a PHP program which will count the user given character from a given paragraph. -->
<?php
$text = "My name is dhruvesh vora";
$s_char = 'm';
$count = 0;
for ($x = 0; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == $s_char) {
        $count += 1;
    }
}
echo $count . "\n";
?>