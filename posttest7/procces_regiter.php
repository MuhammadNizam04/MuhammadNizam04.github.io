<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "users"; 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        
        if (mysqli_query($conn, $insert_query)) {
            echo "Pendaftaran berhasil. Silakan login.";
        } else {
            echo "Pendaftaran gagal: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
