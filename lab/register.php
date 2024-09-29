<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    if ($confirm !== $password) {
        echo "Mật khẩu và xác nhận mật khẩu không khớp";
        exit();
    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username, email, password) VALUES (?,?,?)";
    $stst = $conn->prepare($sql);
    $stst->bind_param("sss", $username, $email, $hash_password, $password);

    if ($stst->execute()) {
        echo "Success!";
    } else {
        echo "Error" . $stmt->error;
    }
}
$conn->close();

?>