<!-- 6. Write a PHP function to convert user given angle to radians and vice versa using radio 
button. (degree to radian and radians to degree) -->
<form action="" method="post">
    <input type="text" name="num"><br>
    degree to radian<input type="radio" name="con" value="deg"><br>
    radian to degree<input type="radio" name="con" value="rad"><br>
    <input type="submit" value="submit" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
    $a = @$_POST['num'];
    $b = @$_POST['con'];
    if ($b == 'deg') {
        echo deg2rad($a);
    }
    if ($b == 'rad') {
        echo rad2deg($a);
    }
}
?>