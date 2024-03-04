<?php
require_once "../database/";
// Lấy nhân viên
function getEmployees() {
    $conn = connectdb();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    $employees = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $employees[] = $row;
    }
    mysqli_free_result($result);
    return $employees;
}

// Lấy nhân viên theo mã nhân viên
function getEmployee($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employee = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employee;
}

// Thêm nhân viên
function addEmployee($name,$address, $email, $phone, $position, $departmentid) {
    $conn = connectDB();
    $sql = "INSERT INTO employees (name, address, email, phone, position, departmentid) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssi", $name, $address, $email, $phone, $position, $departmentid);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

// Cập nhật nhân viên
function updateEmployee($id, $name, $address, $email, $phone, $position, $departmentid) {
    $conn = connectDB();
    $sql = "UPDATE employees SET name =?, address =?, email =?, phone =?, position =?, departmentid =? WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssii", $name, $address, $email, $phone, $position, $departmentid, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
// Xóa nhân viên
function deleteEmployee($id) {
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
//Nhân viên có tồn tại không
function isEmployeeExit($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employee = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employee > 0;
}

// Tìm kiếm nhân viên
function searchEmployee($keyword) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE name LIKE ? OR id LIKE ? OR 
    department_id IN (SELECT id FROM departments WHERE name LIKE ?)";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employees = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $employees[] = $row;
    }
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employees;
}
?>