<!-- 7.Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator. -->
<form action="" method="post">
    Enter the first number<input type="number" name="a" id="">
    Enter the second number<input type="number" name="b" id="">
    <input type="submit" value="submit" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $divide = (int) ($a / $b);
    $mod = $a - $b * $divide;
    echo "reminder is " . $mod;
}
?>