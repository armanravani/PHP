<!-- 5. Write a PHP function to convert user given Decimal value to the user specified base 
using radio button. -->
<form action="" method="post">
    Enter Decimal value : <input type="text" name="dce"><br>
    Binary: <input type="radio" name="con" value="bi"><br>
    Octal: <input type="radio" name="con" value="oc"><br>
    Hexadecimal: <input type="radio" name="con" value="hex"><br><br>
    <input type="submit" value="Submit" name="btn">
</form>

<?php
if (isset($_POST['btn'])){
    $a = @$_POST['dce'];
    $b = @$_POST['con'];

    if ($b == "bi"){
        echo decbin($a);
    }
    if ($b == "oc"){
        echo decoct($a);
    }
    if ($b == "hex"){
        echo dechex($a);
    }
}
?>