<!-- 10) Write php script to display images depending on check box selected. -->
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
    Image 1<input type="checkbox" name="color" value="1"><br><br>
    Image 2<input type="checkbox" name="color" value="2"><br><br>
    Image 3<input type="radio" name="color" value="3"><br><br>
    Image 4 <input type="radio" name="color" value="4"><br><br>
    <button type="submit" name="btn">Chenge Image</button>
</form>
<?php
$a = @$_POST['color'];

if (isset($_POST['btn'])) {
    if ($a == '1') {
        echo "<body style='background-image:url(1.jpg); background-size:300px;'></body>";
    }
    if ($a == '2') {
        echo "<body style='background-image:url(2.jpg); background-size:300px;''></body>";
    }
    if ($a == '3') {
        echo "<body style='background-image:url(3.jpg); background-size:300px;''></body>";
    }
    if ($a == '4') {
        echo "<body style='background-image:url(4.jpg); background-size:300px;''></body>";
    }


}

?>