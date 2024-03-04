// Mô hình đại diện cho bảng department
<?php
require_once "../database.php";

// Lấy danh sách đơn vị
function getDepartments()
{
    $conn = connectdb();
    $sql = "select * from departments";
    $result = mysqli_query($conn, $sql);
    $departments = array();

    // Thực hiện vòng lặp để lấy dữ liệu từ $result và lưu trữ vào mảng
    while ($row = mysqli_fetch_assoc($result)) { // mysql_fetch_assoc"" Lấy một hàng dữ liệu
        $departments[] = $row;
    }
    mysqli_free_result($result); // Giải phóng bộ nhớ
    return $departments;
}

// Lấy danh sách theo id
//function getDepartmentById($id)
//{
//    $conn = connectdb();
//    $sql = "select * from departments where id = $id";
//    $result = mysqli_query($conn, $sql);
//    $department = array();
//
//    // Thực hiện vòng lặp để lấy dữ liệu từ $result và lưu trữ vào mảng
//    while ($row = mysqli_fetch_assoc($result)) { // mysql_fetch_assoc"" Lấy một hàng dữ liệu
//        $department = $row;
//    }
//    mysqli_free_result($result); // Giải phóng bộ nh��
//    return $department;
//}
function getDepartmentById($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);//Chuẩn bị một prepared statement sử dụng hàm mysqli_prepare(). Việc này giúp bảo vệ chống lại tấn công SQL injection bằng cách tách câu lệnh SQL và các giá trị dữ liệu.
    mysqli_stmt_bind_param($stmt, "i", $id); //Gắn giá trị $id đã được cung cấp vào placeholder ? trong câu lệnh SQL, sử dụng mysqli_stmt_bind_param(). "i" biểu thị kiểu dữ liệu integer (số nguyên) của $id.
    mysqli_stmt_execute($stmt); // Thực thi câu lệnh sql đã chuẩn bị
    $result = mysqli_stmt_get_result($stmt); //Lấy kết quả của câu lệnh SQL dưới dạng một mảng
    $department = mysqli_fetch_assoc($result); // lấy dòng dau tien trong mang
    mysqli_free_result($result); // Giai phong bo nho
    mysqli_stmt_close($stmt); // Dong parepared statement $stmt sau khi su dung xong
    return $department;
}

// Thêm đơn vị
function addDepartment($name, $address, $email, $phone, $logo, $website, $parentid)
    // name: Tên bộ phận
    // description: Mô tả bộ phận
{
    $conn = connectDB();
    $sql = "INSERT INTO departments (name, address,email, phone,logo, website, parentid ) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $name, $address, $email, $phone, $logo, $website, $parentid);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

// Cập nhật đơn vị
function updateDepartment($id, $name, $address, $email, $phone, $logo, $website, $parentid)
{
    $conn = connectDB();
    $sql = "UPDATE departments SET name =?, address =?, email =?, phone =?, logo =?, website =?, parentid =? WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssii", $name, $address, $email, $phone, $logo, $website, $parentid, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
//Xóa đơn vị
function deleteDepartment($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM departments WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
// Đơn vị có tồn tại hay không
function isDepartmentExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM departments WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_stmt_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
// Tìm kiếm ơn vị
function searchDepartment($keyword)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE name LIKE?";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $department = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $department[] = $row;
    }
    mysqli_stmt_free_result($result);
    mysqli_stmt_close($stmt);
    return $department;
}
?>