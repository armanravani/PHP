<!-- 11. Write a PHP Code to create a table of sin, cos and tan functions for the interval from 0 
to 180 degrees in increment of 15. -->
<?php
$d = 0;
$A = array(array(), array());
$A[0][0] = " ";
$A[1][0] = "sin";
$A[2][0] = "cos";
$A[3][0] = "tan";


$i = 0;
$count = 0;
while ($d < 195) {
    $A[0][$i + 1] = $d;
    $d = $d + 15;
    $i++;
    $count++;
}


// $j++;

$k = 0;
$d = 0;

while ($d < 195) {
    $A[2][$k + 1] = (cos($d));
    $d = $d + 15;
    $k++;
}

$m = 0;
$d = 0;
while ($d < 195) {
    $A[3][$m + 1] = (tan($d));
    $d = $d + 15;
    $m++;
}
?>

<table border="1">
    <?php
    for ($q = 0; $q < 4; $q++) {
        ?>
        <tr>
            <?php
            for ($c = 0; $c <= $count; $c++) {
                ?>
                <td>
                    <?php 
                        echo $A[$q][$c] 
                    ?>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>
<?php

?>
