<!-- 7. Write a PHP program to print current age of a person in years, months, days. -->
<form action="" method="get">
    DOB:<input type="date" name="n1">
    <input type="submit" name="btn">
</form>

<?php
if (isset($_GET['btn'])) {
    $dateOfBirth = $_GET['n1'];
    $dob = new DateTime($dateOfBirth);
    $now = new DateTime();
    $diff = $now->diff($dob);
    // Get the age in years, months and days
    echo "Your current age is " . $diff->y . " years " . $diff->m . " months " . $diff->d . " days.";
}
?>