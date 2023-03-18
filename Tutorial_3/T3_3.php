<!-- 3. Write a PHP script which rounds the user given values with user specified decimal digit 
precision. -->

<form action="" method="get">
    value : <input type="text" name="n1">
    precision: <input type="number" name="n2">
    <input type="submit" name="btn">
</form>

<?php

if (isset($_GET['btn'])) {
    $v = $_GET['n1'];
    $p = $_GET['n2'];
    echo (round($v, $p));
}
?>