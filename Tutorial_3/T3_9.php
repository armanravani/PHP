<!-- 9. Write a PHP script to display sunrise and sunset time based on specified time zone. -->

<form action="" method="post">
    Timezone: <select name="n1">
        <option value=""></option>
        <option value="America/New_York">America/New_York</option>
        <option value="Lisbon, Portugal">Lisbon, Portugal</option>
    </select>
    <input type="submit" name="btn">
</form>


<?php
if (isset($_POST['btn'])) {
    $t = @$_POST['n1'];
    if ($t == "America/New_York") {
        @$la = 40.730610;
        @$lo = -73.935242;
        @$z = 66.5;
        @$o = 1;
    } else {
        @$la = 38.4;
        @$lo = -9;
        @$z = 90;
        @$o = 1;
    }

    echo $t;
    echo ("Date: " . date("D M d Y"));
    echo ("<br>Sunrise time: ");
    echo (date_sunrise(time(), SUNFUNCS_RET_STRING, $la, $lo, $z, $o));
    echo ("<br>Sunset time: ");
    echo (date_sunset(time(), SUNFUNCS_RET_STRING, $la, $lo, $z, $o));
}


?>