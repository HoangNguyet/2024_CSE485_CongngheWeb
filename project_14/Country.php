

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        /* CSS cho form */
        form {
            border: 1px solid #ccc;
            max-width: 600px; /* Định kích thước tối đa của form */
            margin: 0 auto; /* Canh giữa form trên trình duyệt */
            padding: 20px; /* Tạo khoảng cách giữa nội dung và viền của form */
        }

        /* CSS cho các nhóm trường */
        .form-group {
            margin-bottom: 15px; /* Tạo khoảng cách giữa các nhóm trường */
        }

        /* CSS cho nhãn của trường */
        .form-group label {
            display: inline-block; /* Hiển thị nhãn trên cùng một dòng */
            width: 150px; /* Định kích thước của nhãn */
            font-weight: bold; /* Đặt độ đậm cho nhãn */
        }

        /* CSS cho trường nhập liệu */
        .form-group input[type='text'],
        .form-group select {
            width: calc(100% - 170px); /* Đặt kích thước cho trường nhập liệu, để lại 20px cho padding và border */
            padding: 5px; /* Tạo khoảng cách bên trong trường nhập liệu */
            border: 1px solid #ccc; /* Định kiểu viền cho trường nhập liệu */
            border-radius: 3px; /* Định kiểu bo tròn cho góc của trường nhập liệu */
        }
                h2 {
                   border-bottom: 1px solid #000;
                   padding-bottom: 5px;
                }
        /* Định dạng radio button */
        .form-option input[type="radio"] {
            display: inline-block;
            margin-right: 5px; /* Khoảng cách giữa radio button và nhãn */
        }

        /* Định dạng nhãn của radio button */
        .form-option label {
            display: inline-block;
            vertical-align: middle;
        }

    </style>
</head>
<body>
<?php
// Mảng quốc gia
$countries = array(
    "Afghanistan", "Albania", "Algeria", "Angola", "Anguilla", "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Azerbaijan", "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin","Bermuda", "Bhutan",
    "Boivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
?>
<form action="" method="post">
    <h2>Basic Info</h2>
    <?php
    // Mảng các trường cơ bản
    $basic_fields = array(
        "Employee ID", "Last Name", "First Name", "Gender", "Title", "Suffix", "BirthDate",
        "HireDate", "SNN # (if applicable)", "Reports To"
    );

    // Duyệt qua mỗi trường cơ bản và tạo form group tương ứng
    foreach ($basic_fields as $field) {
        echo "<div class='form-group'>";
        echo "<label for='$field'>$field</label>";

        // Nếu trường là Gender hoặc Reports To, tạo combobox
        if ($field === "Gender") {
            echo "<div class='form-options'>";
            echo "<div class='form-option'>";
            echo "<input type='radio' id='male' name='gender' value='Male' class='form-input'>";
            echo "<label for='male'>Male</label>";
            echo "</div>";

            echo "<div class='form-option'>";
            echo "<input type='radio' id='female' name='gender' value='Female' class='form-input'>";
            echo "<label for='female'>Female</label>";
            echo "</div>";

            echo "<div class='form-option'>";
            echo "<input type='radio' id='other' name='gender' value='Other' class='form-input'>";
            echo "<label for='other'>Other</label>";
            echo "</div>";

            echo "<div class='form-option'>";
            echo "<input type='radio' id='unknown' name='gender' value='Unknown' class='form-input'>";
            echo "<label for='unknown'>Unknown</label>";
            echo "</div>";
            echo "</div>"; // Đóng form-options div
        } elseif ($field === "Reports To") {
            echo "<select id='$field' name='$field'>";
            echo "<option value='Buchanan'>Buchanan</option>
                  <option value='Korea'>Korea</option>
                  <option value='Japan'>Japan</option>
                  <option value='Vietnam'>Vietnam</option>";
            echo "</select>";
        } else {
            // Nếu không, tạo input text
            echo "<input type='text' id='$field' name='$field'>";
        }
        echo "</div>"; // Đóng form-group div
    }
    ?>
    <h2>Contact Info</h2>
    <?php
    // Mảng các trường liên hệ
    $contact_fields = array("Email", "Address", "City", "Region", "Postal Code", "Country", "US Home Phone", "Photo");
    foreach ($contact_fields as $field) {
        echo "<div class='form-group'>";
        echo "<label for='$field'>$field</label>";

        // Nếu trường là Country, tạo combobox
        if ($field === "Country"){
            echo "<select id='$field' name='$field'>";
            foreach ($countries as $country) {
                echo "<option value='$country'>$country</option>";
            }
            echo "</select>";
        } else {
            // Nếu không, tạo input text
            echo "<input type='text' id='$field' name='$field'>";
        }
        echo "</div>"; // Đóng form-group div
    }
    ?>
</form>
</body>

</html>
