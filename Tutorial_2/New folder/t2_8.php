<form action="" method="post">
    <input type="number" name="x" id="">
    <input type="number" name="y" id="">
    <input type="submit" value="GCD/LCM" name="btn">
</form>
<?php
if(isset($_POST['btn']))
{
    $x=$_POST['x'];
    $y=$_POST['y'];
    if($x>$y)
    {
        $temp = $x;
        $x=$y;
        $y=$temp;
    }
    for($i=1;$i<($x+1);$i++)
    {
        if($x%$i==0&&$y%$i==0)
        {
            $gcd=$i;
        }
        $lcm=($x*$y)/$gcd;
    }
    echo "LCM of $x and $y is: $lcm <br>";
    echo "GCD of $x and $y is: $gcd";
}