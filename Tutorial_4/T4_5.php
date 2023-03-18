<!-- 5. Write a PHP code that allows users to upload image files with jpeg extension and size 
less than or equal to 20Kb and move the uploaded files to any folder. -->

<form action="" method="post" enctype="multipart/form-data">
    <label for="staticNumber" class="col-sm-2 col-form-label">Profile Picture</label>
    <input type="file" name="pic">

        <button type="submit" name="reg_btn">submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    if ($_FILES['pic']['name'] == "") {
        ?>
        <h2 style="color:red">Select a file to upload</h2>
        <?php
    } else {
        if ($_FILES['pic']['size'] <= 20000 && ($_FILES['pic']['type'] == "image/jpeg")) {
            $pfn = $_FILES['pic']['name'];

            move_uploaded_file($_FILES['pic']['tmp_name'], "uploaded/" . $pfn);
            echo "<h1 style='color:green'> File uploaded successfully </h1>";

        } else {
            ?>
            <h2 style="color:red">SElect a JPEG file wirh size less than 20 KB</h2>
            <?php
        }
    }
}
?>