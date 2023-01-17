<!-- 9) Write php script to change the color of page as per radio button. -->
<style>
    form {
        position: absolute;
        top: 40%;
        left: 45%;
        /* border:1px solid black;/ */
        transform: -50% -50%;
        text-align: center;
        background: yellow;
    }
</style>
<form action="" method="post">
    RED<input type="radio" name="color" value="red"><br><br>
    GREEN<input type="checkbox" name="color" value="green"><br><br>
    <button type="submit" name="btn">chenge Color</button>
</form>
<?php
$a = @$_POST['color'];

if (isset($_POST['btn'])) {
    if ($a == 'red') {
        echo "<body style='background-color:red;'></body>";
    }
    if ($a == 'green') {
        echo "<body style='background-color:green; '></body>";
    }

}

?>