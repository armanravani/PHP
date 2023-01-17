<!-- 4) Write php script to design a simple calculator. -->
<form action="" method="post">
    Enter first number : <input type="number" name="num1">
    Enter Second number : <input type="number" name="num2">
    <br><br>
    <input type="submit" value="+" name="add">
    <input type="submit" value="-" name="sub">
    <input type="submit" value="*" name="mul">
    <input type="submit" value="/" name="div">

</form>

<?php
$num1 = @$_POST['num1'];
$num2 = @$_POST['num2'];
if (@$_POST['add']) {
    echo $num1 . "+" . $num2 . " = " . $num1 + $num2;
}
if (@$_POST['sub']) {
    echo $num1 . "-" . $num2 . " = " . $num1 - $num2;
}
if (@$_POST['mul']) {
    echo $num1 . "*" . $num2 . " = " . $num1 * $num2;
}
if (@$_POST['div']) {
    echo $num1 . "/" . $num2 . " = " . $num1 / $num2;
}

?>