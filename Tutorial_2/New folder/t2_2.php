<form action="" method="post">
    a:<input type="text" name="a" id="">
    b:<input type="text" name="b" id="">
    <input type="submit" value="submit" name="btn">
</form>
<?php
if(isset($_POST['btn']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=0;
    $prime=0;
    for($j=$a;$j<=$b;$j++)
    {  $c=0;
       for($i=2;$i<$j;$i++)
        {
            if($j%$i==0)
            {
                 $c+=1;
            }
        }
        if($c==0)
        {
            $prime=$j+$prime;
        }
    }
    echo "Sum of prime number:".$prime;
}
