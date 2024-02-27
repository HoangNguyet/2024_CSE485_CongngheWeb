<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project_22</title>
    <link rel="stylesheet" href="style_22.css">
</head>
<body>
<div class="container">
    <?php
        $user = [
            "id" => 2,
            "name" => "Lan Hương",
            "email" => "lanhuongbn@example.com",
            "avatar" => "uploads/default_avatar.png" // Initial avatar URL
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $maxSize = 1048576; 
            $targetDir = "uploads/"; 
            if (!empty($_FILES['avatar']['tmp_name'])) {
                $fileInfo = pathinfo($_FILES['avatar']['name']);
                if (!in_array($fileInfo['extension'], $allowedExtensions)) {
                    $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
                } else if ($_FILES['avatar']['size'] > $maxSize) {
                    $errors[] = "File size must be less than 1MB.";
                } else {
                    $fileName = uniqid() . "." . $fileInfo['extension'];
                    $targetFile = $targetDir . $fileName;
                    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)){
                        $user['avatar'] = $targetFile; // Update avatar URL in array
                    } else {
                        $errors[] = "Failed to upload file.";
                    }
                }
            }
            if (empty($errors)) {
                echo "Profile updated successfully!";
            } else {
                echo "Errors:";
                foreach ($errors as $error) {
                    echo "<br> - $error";
                }
            }
        }
           
    ?>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2 >Profile Information</h2>
        <div class="form-group">   
            <label for="name">Name:</label>
            <input  type="text" name="name" value="<?php echo $user['name']; ?>"required></br>
            <br>
            <label for="email">Email:</label>
            <input  type="email" name="email" value="<?php echo $user['email']; ?>"required></br>
            <br>
            <label class ="avatar" for="avatar">Avatar:</label>
            <input type="file" name="avatar" accept="image/*"></br>
            <br>
            <button class="button" type="submit">Update Profile</button>
            </div>
    </form>
</div>
</body>
</html>