<!-- 4.Write a PHP program to construct the following pattern. 
*
**
***
****
*****
*****
****
***
**
* -->

<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo " * ";
    }
    echo "<br>";
}
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j <= $n - 1; $j++) {
        echo " * ";
    }
    echo "<br>";
}
?>
