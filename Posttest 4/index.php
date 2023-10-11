<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Sembako</title>
    <link rel="stylesheet" href="tampilan.css"> 
</head>
<body>
    <div class="badan-utama">

        <header>
            <h2>WaraS</h2>
            <p>Sembako Murah Merakyat!</p>
        </header>
        <form method="post" action="proses.php" class="saran" >
            <input type="text" name="nama" placeholder="Nama">
            <input type="text" name="usia" placeholder="Usia">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Kirim">
        </form>
        <nav class="navigasi">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="#idabout">About Me</a></li>
                <li><a id="mode-toggle" class="hitam" align="right">Dark Mode</a></li>
            </ul>
        </nav>
        <div class="banner">
            <img src="foto.jpeg" alt="gambar">
        </div>
        <div class="menu-tengah">
            <div class="kotak">
                <h3>Toko Sembako</h3>
                <span class="tanggal-posting">
                    Diposting pada 11.04 WITA, 29 April 2023
                </span>
                <img src="foto.jpeg" alt="foto">
                <p>
                    Klik dibawah ini jika anda ingin mengetahui lebih banyak mengenai toko kami
                </p>
                <a class="tombol tombol-lengkap">Selengkapnya</a>
            </div>
        </div>
        <div class="menu-kanan">
            <div class="kotak">
                <h3>Jadwal Buka</h3>
                <img src="foto.jpeg" alt="foto">
 
                <h4 align="center">Jadwal Buka</h4>
                <center>
                    <p>Senin-Minggu 08.00 WITA - 22.00 WITA</p>
                </center>
            </div>
            <div class="kotak">
                <h3>Tersedia</h3>
                <nav class="olahan">
                    <ul>
                        <li><a>Berbagai macam olahan sayuran</a></li>
                        <li><a>Bahan Olahan Mentah</a></li>
                        <li><a>Bahan Masakan Dapur</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
       <footer class="footer">
            <div class="footer-content" id="idabout">
                <div class="footer-info">
                    <h3>About Me</h3>
                    <p>Nama: Muhammad Nizam</p>
                    <p>Alamat: JL.Perjuangan 5 Kota Samarinda</p>
                    <p>Telepon: 0895-1822-9605</p>
                    <p>Email: <a href="mailto:[Alamat Email Anda]">ijamnizam224@gmail.com</a></p>
                </div>
                <div class="footer-social">
                    <h3>Ikuti Saya</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100047245231406&mibextid=LQQJ4d"><img src="fb.png" alt="Facebook"></a></li>
                        <li><a href="https://instagram.com/___mazin.m?igshid=MzMyNGUyNmU2YQ=="><img src="ig.png" alt="Instagram"></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2023 Toko Sembako - Semua Hak Dilindungi
            </div>
        </footer>
        </div>
        
    </div>
    <script>
        function toggleMode() {
            const body = document.body;
            body.classList.toggle("dark-mode");
            
            const aboutInfo = document.getElementById("idabout");
            if (body.classList.contains("dark-mode")) {
                aboutInfo.style.color = "#fff";
            } else {
                aboutInfo.style.color = "#333";
            }
        }
        document.getElementById("mode-toggle").addEventListener("click", toggleMode);
    </script>
</body>
</html>
