<!-- 6. Write a PHP program to convert user given binary number to decimal number and vice versa.  -->
<form action="" method="post">
    Enter binary number:<input type="number" name="number">
    <input type="submit" value="submit" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
    $number = $_POST['number'];
    $decimal = base_convert($number, 2, 10);
    echo "Decimal number is " . $decimal;
}
?>