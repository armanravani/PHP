<form action="" method="post">
    <input type="number" name="number" id="">
    <input type="submit" value="submit" name="btn">
</form>
<?php
if(isset($_POST['btn']))
{
    $number=$_POST['number'];
    $decimal=base_convert($number,2,10);
    echo "Decimal number is ".$decimal;
}