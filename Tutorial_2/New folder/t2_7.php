<form action="" method="post">
    <input type="number" name="a" id="">
    <input type="number" name="b" id="">
    <input type="submit" value="submit" name="btn">
</form>
<?php
if(isset($_POST['btn']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $divide=(int)($a/$b);
    $mod=$a-$b*$divide;
    echo "reminder is ".$mod;
}