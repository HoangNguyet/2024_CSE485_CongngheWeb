<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="update_profile.php">
    <link rel="stylesheet" href="style.css">
    <title>Project_22</title>
</head>
<body>
<?php
$user=[
    "id"=>1,
    "name"=>"John Doe",
    "email"=>"johndoe@example.com",
    "avatar"=>"uploads"
];
?>
<?php
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
        $errors = [];
        $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);// Handle avatar upload (similar to previous exercise)
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxSize = 1048576; // 1MB
        $targetDir = "uploads/"; // Adjust directory pat
        if (!empty($_FILES['avatar']['tmp_name']))
            $fileInfo = pathinfo($_FILES['avatar']['name']);
            if (!in_array($fileInfo['extension'], $allowedExtensions)) {
                $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
            } else if ($_FILES['avatar']['size'] > $maxSize) {
                $errors[] = "File size must be less than 1MB.";
            } else {
                $fileName = uniqid() . "." . $fileInfo['extension'];
                $targetFile = $targetDir . $fileName;
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile))
                {
                    $user['avatar'] = $targetFile; // Update avatar URL in array
                } else {
                    $errors[] = "Failed to upload file.";
                }
        }
    }
    // Handle errors or update profile
         if (empty($errors)) {
             echo "Profile updated successfully!";
         } else {
             echo "Errors:";
             foreach ($errors as $error) {
             echo "<br> - $error";
             }
        }

?>
<div class="container">
    <h1>Account Settings</h1>
    <div class="table">
        <div class="column_1">
            <div class="profile">Profile</div>
            <div class="password">Password</div>
            <div class="integrations">Integrations</div>
            <div class="billing">Billing</div>
        </div>
        <div class="column_2">
            <form action="update_profile.php" method="post" enctype="multipart/form-data">
                <div class="circle">
                    <img id="previewImage" src="" alt="">
                </div>
                <input type="file" name ="avatar" accept="/" onchange="previewFile(event)"><br>
                <label for="name"> Full name</label><br>
                <input type="text" name="name" value="<?php echo $user['name'];?>" required>
                <br>
                <label for="email">Email</label><br>
                <input type="text" name="email" value="<?php echo $user['email'];?>" required>
                <br>
                    <button type="submit">Save</button>

            </form>
        </div>
    </div>
</div>
<script>
    function previewFile(event){
        var input=event.target;
        var reader=new FileReader();
        reader.onload=function () {
            var dataURL = reader.result;
            var previewImage = document.getElementById('previewImage');
            previewImage.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
</body>
</html>