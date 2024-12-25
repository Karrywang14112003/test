<?php
session_start();
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "Student";
$password = "123";
$dbname = "hocsinh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

function checkLogin($username, $password)
{
    global $conn;
    $sql1 = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND status = 1";
    $result = $conn->query($sql1);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return null;
    }
}

function checkUserRole($username)
{
    global $conn;
    $sql = "SELECT role FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user['role'];
    } else {
        return null;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);

    if ($user !== null) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $role = checkUserRole($user['username']);

        if ($role == 'admin') {
            header("Location: index.php");
            $_SESSION['loggedin'] = true;

            exit(); // Kết thúc chương trình sau khi chuyển hướng
        } elseif ($role == 'client') {
           header("Location: index2.php");
           $_SESSION['loggedin'] = true;

            exit(); // Kết thúc chương trình sau khi chuyển hướng
        }
    } else {
        echo "Đăng nhập không thành công";
    }
}

$conn->close();
?>
