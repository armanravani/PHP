<!-- 10.Write a PHP program to check for a palindrome number. -->
<form action="" method="post">
    <input type="text" name="n" id="">
    <input type="submit" value="find pelidrom" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
    $n = $_POST['n'];
    $temp = $n;
    $ans = 0;
    while (floor($temp)) {
        $a = $temp % 10;
        $ans = $ans * 10 + $a;
        $temp /= 10;
    }
    if ($ans == $n) {
        echo "$ans is a pelindrom number";
    } else {
        echo "$ans is not a pelindrom number";
    }
}
?>