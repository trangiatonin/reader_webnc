<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($stored_password);

    // Kiểm tra số lượng kết quả trả về
    if ($stmt->num_rows > 0) {
        $stmt->fetch();

        // So sánh mật khẩu đã nhập với mật khẩu lưu trữ
        if ($password === $stored_password) {

            header('location: index copy.html#'); // Thay đổi redirect nếu cần
            exit();
        } else {
            echo "Mật khẩu không chính xác!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }

    $stmt->close();
    $conn->close();
}
?>