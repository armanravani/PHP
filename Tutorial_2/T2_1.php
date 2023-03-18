<!-- 1. Write a PHP program to convert digit to Word. -->
<form method="post">
    Enter number 1 to 10:
    <input type="number" name="name" id="">
    <input type="submit" name="btn">
</form>

<?PHP
if (isset($_POST['btn'])) {
    $result = '';
    $num = $_POST['name'];
    switch (trim($num)) {
        case 1:
            $result = 'One';
            break;
        case 2:
            $result = 'Two';
            break;
        case 3:
            $result = 'Three';
            break;
        case 4:
            $result = 'Four';
            break;
        case 5:
            $result = 'Five';
            break;
        case 6:
            $result = 'Six';
            break;
        case 7:
            $result = 'Seven';
            break;
        case 8:
            $result = 'Eight';
            break;
        case 9:
            $result = 'Nine';
            break;
        case 10:
            $result = 'Ten';
            break;
    }
    echo "Word :" . $result;
}

?>