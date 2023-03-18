<?php
$a = @$_GET['fn'];
$b = @$_GET['ln'];
$c = @$_GET['num'];
$d = @$_GET['date'];
$e = @$_GET['dd'];
$f = @$_GET['gen'];
$g = @$_GET['con'];

// echo "$a";
// echo "<br><br> $b";
// echo "<br><br> $c";
// echo "<br><br> $d";
// echo "<br><br> $e";
// echo "<br><br> $f";
if (isset($_GET['btn'])) {
    echo "welcome  " . $a . "  " . $b . "<br><br>" . $c . "<br><br>" . $d . "<br><br>" . $e . "<br><br>" . $f . "<br><br>" . $g;
}

?>