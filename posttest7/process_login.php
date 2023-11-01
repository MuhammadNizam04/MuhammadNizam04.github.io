<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "contohuser" && $password === "contohpassword") {
        header("Location: index.php");
        exit();
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}

?>
