<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "users"; // Gantilah dengan nama database yang sesuai

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Periksa apakah username sudah digunakan
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Enkripsi password sebelum menyimpannya ke database (gunakan metode yang lebih aman)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert data pengguna ke dalam database
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
