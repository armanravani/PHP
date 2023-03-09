<!-- 6. Write a PHP code that allows you to upload a PDF file of size less than 100Kb and move 
the uploaded file to any folder. -->


<form action="" method="post" enctype="multipart/form-data">
    <label for="staticNumber" class="col-sm-2 col-form-label">Select PDF file</label>
    <input type="file" name="pic">

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary" name="reg_btn">submit</button>
    </div>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if ($_FILES['pic']['name'] == "") {
        ?>
        <h2 style="color:red">Select a PDF file to upload</h2>
        <?php
    } else {
        if ($_FILES['pic']['size'] <= 1000000 && ($_FILES['pic']['type'] == "application/pdf")) {
            $pfn = $_FILES['pic']['name'];

            move_uploaded_file($_FILES['pic']['tmp_name'], "uploaded/" . $pfn);
            echo "<h1 style='color:green'> File uploaded successfully </h1>";

        } else {
            ?>
            <h2 style="color:red">SElect a PDF file wirh size less than 100 KB</h2>
            <?php
        }
    }
}
?>