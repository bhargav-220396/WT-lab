<?php
if(isset($_POST['upload'])){
    $fileName = $_FILES['Newfile']['name'];
    $tempName = $_FILES['Newfile']['tmp_name'];
    $targetPath = "uploads/" . $fileName;

    if(move_uploaded_file($tempName, $targetPath)){
        echo "<p style='color:green;'>File Uploaded Successfully!</p>";
        echo "<a href='download.php?file=$fileName'>
                <button>Download File</button>
              </a>";
    } else {
        echo "<p style='color:red;'>File upload failed!</p>";
    }
}