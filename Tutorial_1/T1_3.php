<!-- 3) Write php script to display persons age and using post method. -->
<form method="post">
    enter your age : <input type="number" name="age">
</form>

<?php
$age = @$_POST['age'];
echo "YOUR age : " . $age;
?>