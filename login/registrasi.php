<?php
require 'koneksi.php';
if(isset($_POST['register'])){  // kalo register ditekan
    if (registrasi($_POST) > 0) { //kalau row lebih dari nol berarti ada user baru
        echo "<script>
                alert('user baru berhasil ditambahkan');
                document.location.href = 'login.php';
                exit;
            </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="utama">

        <div class="quotes">
            <header>Welcome to Our Website</header>
            <p>bergabunglah untuk mengetahui keseruan yang terdapat di dalamnya</p>
        </div>
        <div class="formulir">
            <header>SIGN UP</header>
            <form action="">
                <div><input type="text" id="input_nama" name="usernam" placeholder="Username"></div>
                <div><input type="text" id="input_email" name="email" placeholder="Your Email...."></div>
                <div><input type="text" id="input_password" name="password" placeholder="Password...."></div>
                <div><input type="text" id="konfir_pw" name="konfir_pw" placeholder="Konfirmasi Password...."></div>
                <div><input type="submit" name="register" placeholder="Sign Up" ></div>
            </form>
            
        </div>
    </div>
</body>
</html>