<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
    } else {
        // Upload the file
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
    }
}
?>
