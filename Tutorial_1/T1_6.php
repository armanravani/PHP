<!-- 6) Write php script to find simple interest from values from values p, r, n. -->
<form method="post">
Enter the principal amount  : &nbsp;<input type="number" name="num1"><br>
Enter the rate of interest : &nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="num2"><br>
Enter the number of years  : &nbsp;&nbsp;<input type="number" name="num3"><br>
<input type="submit" value="sub" name="sub">

</form>

<?php
if (isset($_POST["sub"])) {
    $p = @$_POST['num1'];
    $r = @$_POST['num2'];
    $n = @$_POST['num3'];

    $res = ($p * $r * $n) / 100;

    echo "$res is simple interest";

}
?>