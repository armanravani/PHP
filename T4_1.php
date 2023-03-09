<!-- 1. Write php code to upload a file and display name, type and size of it. -->
<form method="post" action="" enctype="multipart/form-data">
    Select a file:
    <input type="file" name="f1">
    <br>
    <input type="submit" value="Upload file" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
        echo "<h1 style='color:red'> Please select a file to upload </h1>";
    } else {
        if ($_FILES['f1']['type'] == "image/jpeg") {
            echo "<h1 style='color:green'> File uploaded successfully </h1>";
            echo "File type:-" . $_FILES['f1']['type'] . "<br>";
            echo "File name:-" . $_FILES['f1']['name'] . "<br>";
            echo "File size:-" . $_FILES['f1']['size'] . "<br>";
        } else {
            echo "<h1 style='color:red'> Please select jpg file to upload.</h1>";
        }
    }
}
?>