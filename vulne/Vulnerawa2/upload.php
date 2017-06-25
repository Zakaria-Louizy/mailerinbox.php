<?php
error_reporting(E_ERROR);
$target_path  =  "uploads/";
$target_file  =  $target_path  .  basename($_FILES["fileToUpload"]["name"]);
$extension = pathinfo($_FILES, PATHINFO_EXTENSION);
$allowedExtensions = array("doc","docx","pdf","rtf");
$isAllowed = in_array($extension, $allowedExtensions);
//// Allow certain file formats
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>