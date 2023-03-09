<!-- 8. Write a PHP program to display time in a user specified time zone. -->
<form action="" method="post">
    Timezone: <select name="n1">
        <option value="America/New_York">America/New_York</option>
        <option value="Pacific/Midway">Pacific/Midway</option>
        <option value="Africa/Accra">Africa/Accra</option>
    </select>
    <input type="submit" name="btn">
</form>


<?php
if (isset($_POST['btn'])) {
    $t = @$_POST['n1'];
    date_default_timezone_set($t);
    echo "The time is " . date("h:i:sa");
}

?>