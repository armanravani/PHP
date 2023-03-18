<!-- 8) Write php script to display power of 2 values entered by user in text box. -->
<form method="post" action="">
    Enter Value :- <input type="number" name="p"><br>
    <input type="submit" name="btn" value="Enter">
</form>
<?php
$p = @$_POST['p'];

$si = $p ** 2;
if (isset($_POST['btn'])) {
    echo "Power : " . $si;
}
?>