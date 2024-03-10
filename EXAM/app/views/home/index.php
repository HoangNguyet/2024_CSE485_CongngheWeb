<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý bệnh viện</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 class = "text-center text-uppercase text-success m">Quản lý bệnh viện</h3>
        <a href="<?= DOMAIN.'/views/patient/add.php';?>" class = 'btn btn-success'>Thêm mới</a>
        <table class ="table">
            <tr>
                <th scope = "col">Mã bệnh nhân</th>
                <th scope = "col">Họ tên</th>
                <th scope = "col">Giới tính</th>
                <th scope = "col">Ngày sinh</th>
                <th scope = "col">Địa chỉ</th>
                <th scope = "col">Điện thoại</th>
                <th scope = "col">Sửa</th>
                <th scope = "col">Xóa</th>
            </tr>
            <?php
                foreach($patients as $patient){
                    echo "<tr>";
                    echo "<td>".$patient->getId()."</td>";
                    echo "<td>".$patient->getFullname()."</td>";
                    echo "<td>".$patient->getGender()."</td>";
                    echo "<td>".$patient->getDateOfBirth()."</td>";
                    echo "<td>".$patient->getAddress()."</td>";
                    echo "<td>".$patient->getMobile()."</td>";
                    echo "<td><a href='".DOMAIN."/views/patient/edit.php?id=".$patient->getId()."' class = 'btn btn-primary'>Sửa</a></td>";
                    echo "<td><a href='".DOMAIN."/views/patient/delete.php?id=".$patient->getId()."' class = 'btn btn-danger'>Xóa</a></td>";
                    echo "</tr>";
                }
            ?>
        
    </div>
</body>
</html>