<?php
require 'function.php';
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
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="login/style.css">
</head>
<body>
    <div class="utama">

        <div class="quotes">
            <header>Welcome to Our Website</header>
            <p>bergabunglah untuk mengetahui keseruan yang terdapat di dalamnya</p>
        </div>
        <div class="formulir">
            <header>SIGN UP</header>
            <form action="" method="post">
                <div><input type="text" id="input_nama" name="username" placeholder="Username"></div>
                <div><input type="email" id="input_email" name="email" placeholder="Your Email...."></div>
                <div><input type="password" id="input_password" name="password" placeholder="Password...."></div>
                <div><input type="password" id="konfir_pw" name="konfir_pw" placeholder="Konfirmasi Password...."></div>
                <div><input type="submit" name="register" value="Sign Up" /></div>
            </form>
            <div class="sign-txt">Already have an account? <a href="login.php">SignIn now</a></div>
        </div>
    </div>
</body>
</html>