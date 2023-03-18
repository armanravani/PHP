<!-- 2) Write a php script to design a registration form and fetch value using get and post method. -->
<form method="post" action="">

    Enter first name <input name="fn"><br><br>
    Enter last name <input name="ln"><br><br>
    Number <input type="number" name="num"><br><br>
    Date <input type="date" name="date"><br><br>

    Radio <input type="radio" name="gen" value="male">male
    <input type="radio" name="gen" value="female">female
    <br><br>

    Checkbox <input type="checkbox" name="con" value="japan">japan
    <input type="checkbox" name="con" value="india">india
    <input type="checkbox" name="con" value="uk">uk <br><br>

    <input type="submit" value="register" name="btn"><br>
    <br><br>
</form>

<?php
$a = @$_POST['fn'];
$b = @$_POST['ln'];
$c = @$_POST['num'];
$d = @$_POST['date'];
$f = @$_POST['gen'];
$g = @$_POST['con'];

// echo "$a";
// echo "<br><br> $b";
// echo "<br><br> $c";
// echo "<br><br> $d";
// echo "<br><br> $e";
// echo "<br><br> $f";
// if (isset($_POST['btn'])) 
if ($_SERVER['REQUEST_METHOD']=='POST') 

{
    echo "welcome  " . $a . "  " . $b . "<br><br>" . $c . "<br><br>" . $d . "<br><br>" . $f . "<br><br>" . $g;
}
?>