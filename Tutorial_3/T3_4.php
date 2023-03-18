<!-- 4. Write a PHP script to find the hypotenuse of a triangle based on user given opposite and 
adjacent side. -->

<form action="" method="get">
    Opposite <input type="text" name="n1">
    Adjacent <input type="number" name="n2">
    <input type="submit" name="btn">
</form>

<?php
if (isset($_GET['btn'])) {
    $v = $_GET['n1'];
    $p = $_GET['n2'];
    echo (hypot($v, $p));
}
?>