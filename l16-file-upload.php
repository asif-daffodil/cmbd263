<?php
$acceptedFiles = ["jpg", "jpeg", "png", "gif"];

if (isset($_POST['upload'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileExtention = pathinfo($fileName, PATHINFO_EXTENSION);
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = substr(str_shuffle($letters), 0, 6);
    $newFileName = $randomString . "_" . uniqid() . "." . $fileExtention;
    // getImageSize($fileTmpName);
    if (!in_array($fileExtention, $acceptedFiles)) {
        echo "Please upload an image file";
    } elseif ($fileSize > 500000) {
        echo "please upload an image file less than 500kb";
    } else {
        move_uploaded_file($fileTmpName, "uploads/$newFileName");
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="submit" value="Upload" name="upload">
</form>