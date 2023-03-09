<!-- 2. Write a PHP script to insert a user specified string at the specified position in each string. -->
<form action="" method="get">
    Enter a main string:::
    <input type="text" name="main"><br>
    String to insert:::
    <input type="text" name="new"><br>
    Enter a position:::
    <input type="text" name="position"><br>
    <input type="submit" value="Generate new String" name="btn">
</form>

<?php
if (isset($_GET['btn'])) {
    $org_string = @$_GET['main'];
    $insert_string = @$_GET['new'];
    $insert_position = @$_GET['position'];
    $new_string = substr_replace($org_string, $insert_string . ' ', $insert_position, 0);
    echo $new_string . "\n";
}
?>