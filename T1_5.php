<!-- 5) Write php script to display max and min value from 3 values. -->
<form action="" method="post">
    Enter first number : <input type="number" name="num1">
    Enter Second number : <input type="number" name="num2">
    Enter third number : <input type="number" name="num3">
    <br><br>
    <input type="submit" value="sub" name="max">

</form>
<?php
if (isset($_POST["max"])) {
    $n1 = @$_POST['num1'];
    $n2 = @$_POST['num2'];
    $n3 = @$_POST['num3'];

    if ($n1 >= $n2 && $n1 >= $n3)
        echo "$n1 is maximum";

    if ($n2 >= $n1 && $n2 >= $n3)
        echo "$n2 is maximum";

    if ($n3 >= $n1 && $n3 >= $n2)
        echo "$n3 is maximum";

}
?>