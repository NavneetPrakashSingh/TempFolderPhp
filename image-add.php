<?php
if (! empty($_FILES)) {
    $imagePath = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : "Undefined";
    $targetPath = "uploads/";
    $imagePath = $targetPath . $imagePath;
    $tempFile = $_FILES['file']['tmp_name'];
    
    $targetFile = $targetPath . $_FILES['file']['name'];
    
    if (move_uploaded_file($tempFile, $targetFile)) {
        echo "true";
    } else {
        echo "false";
    }
}
// if (! empty($_GET["action"]) && $_GET["action"] == "save") {
//     require_once ("db.php");
//     print $sql = "INSERT INTO images_info (image_path) VALUES ('" . $imagePath . "')";
//     mysqli_query($conn, $sql);
//     $current_id = mysqli_insert_id($conn);
// }
?>