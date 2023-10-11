<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $password = $_POST["password"];
    
    echo "Nama: " . $nama . "<br>";
    echo "Usia: " . $usia . "<br>";
    echo "Kata Sandi: " . $password . "<br>";
}
?>
