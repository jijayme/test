<?php
 // Specify the target directory where you want to save the uploaded files
$empno = (isset($_POST['empno'])?$_POST['empno']:"");
// $targetDirectory = 'upload/';
 


// Specify the target directory where you want to save the uploaded files
$targetDirectory = 'upload/'.$empno."/";

// Check if the target directory exists; if not, create it
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0755, true); // Create the directory with appropriate permissions
}

// Check if a file was uploaded successfully
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['fileToUpload'];
    
    // Get the file name
    $filename = basename($file['name']);
    
    // Specify the full path to save the file
    $targetFilePath = $targetDirectory . $filename;
    
    // Check if the file already exists in the target directory
    // if (file_exists($targetFilePath)) {
    //     echo "File already exists.";
    // } else {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            echo "File uploaded successfully for ".$empno;
        } else {
            echo "Error uploading file. ";
        }
    // }
} else {
    echo "File upload failed. Please check file format.";
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="testupload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="empno" id="empno" required placeholder="Input Employee Number">
    <br/>

    <input type="file" name="fileToUpload" id="fileToUpload" required>
    <input type="submit" value="Upload File" name="submit">
</form>
</body>
</html>