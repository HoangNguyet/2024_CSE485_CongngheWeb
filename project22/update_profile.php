<!--Xử lý upload aảnh và thay avatar-->
<?php
// Kiểm tra xem form đã được submit chưa
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Kiểm tra tính hợp lệ và Update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Handle avatar upload
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxsize = 1048576;
    $targetDir = "uploads";
    if(!empty($_FILES['avatar']['tmp_name']))
    {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if(!in_array($fileInfo['extension'], $allowedExtensions))
        {
            $errors[] = "Only JPG, PPEG, and PNG files are allowed.";
        }else if($_FILES['avatar']['size'] > $maxsize)
        {
            $errors[] = "File size must be less than 1MB.";
        }
        else{
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if(move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)){
                $user['avatar'] = $targetFile; // upload avatar URL in array
            }
            else{
                $errors [] = "Failed to upload file";
            }
        }
    }
    // Uplaod profile
    if(empty($errors))
    {
        //upload profile
        echo "Profile update successfully";
    }
    else{
        echo "Errors:";
        foreach ($errors as $er)
        {
            echo "<br> - $er";
        }
    }
}
?>