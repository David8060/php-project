<?php
function handleImageUpload($imageFile) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($imageFile["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if image file is an actual image or fake image
    $check = getimagesize($imageFile["tmp_name"]);
    if ($check === false) {
        return ["status" => "error", "message" => "File is not an image."];
    }

    // Check file size
    if ($imageFile["size"] > 2000000) { // 2 MB limit
        return ["status" => "error", "message" => "Sorry, your file is too large."];
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        return ["status" => "error", "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."];
    }

    // Check if uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return ["status" => "error", "message" => "Sorry, your file was not uploaded."];
    } else {
        // Create the uploads directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($imageFile["tmp_name"], $target_file)) {
            return ["status" => "success", "file_path" => $target_file];
        } else {
            return ["status" => "error", "message" => "Sorry, there was an error uploading your file."];
        }
    }
}
