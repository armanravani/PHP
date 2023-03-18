<!-- 2. Write php code to upload a file and save that file in a folder call uploaded. -->

<form action="" method="post" enctype="multipart/form-data">
    <label for="staticNumber" class="col-sm-2 col-form-label">Profile Picture</label>
    <input type="file" name="pic">

        <button type="submit" name="reg_btn">submit</button>
</form>


<?php
if (isset($_POST['reg_btn']))
{
    if ($_FILES['pic']['name'] == "") {
        ?>
        <h2 style="color:red">Select a file to upload</h2>
        <?php
    } else {
        if ($_FILES['pic']['type'] == "image/jpeg") {
            $pfn = $_FILES['pic']['name'];

            move_uploaded_file($_FILES['pic']['tmp_name'], "uploaded/" . $pfn);
            echo "<h1 style='color:green'> File uploaded successfully </h1>";

        } else {
            ?>
            <h2 style="color:red">SElect a JPG file </h2>
            <?php
        }
    }
}
?>