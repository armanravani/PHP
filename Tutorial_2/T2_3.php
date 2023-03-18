<!-- 3.Write a PHP script that inserts a new item in a user given position. -->
<?php
$main_array = array( '1', '2', '3', '4', '5' );

echo 'Original array :';
foreach ($main_array as $x)
{
echo "<br>$x";
}
$inserted = '11';
$position = 3;

//array_splice() function

array_splice( $main_array, $position, 0, $inserted );

echo "<br> After inserting 11 in the array possion is $position";
foreach ($main_array as $x)
{
echo "<br>$x ";
}
?>
