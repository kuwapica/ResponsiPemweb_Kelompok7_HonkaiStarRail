<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil username pengguna yang login
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="Profil/profil.css">
</head>
<body>
    <header>
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Honkai Star rail Manager</a>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Beranda</a></li>
                    <li class="nav__item"><a href="Bos1.php" class="nav__link">Enemy</a></li>
                    <li class="nav__item"><a href="rules.php" class="nav__link">Game Rules</a></li>
                    <li class="nav__item"><a href="Profil.php" class="nav__link active">Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h1>Profile user</h1>
        <div class="container">
            <div class="kanan">
                <div class="judul">

                    <h1>Riwayat Match<span class="dropdown">
                        <span class="dropbtn">v</span>
                        <div class="dropdown-content">
                            <a href="History1.php">Babak 1</a>
                            <a href="History2.php">Babak 2</a>
                            <a href="History3.php">Babak 3</a>
                        </div>
                    </span></h1>
                </div>
                <div class="info">
                <p class="info_akun">Username : <?php
                        echo "<span>" . $username . "</span>";
                        ?></p>
                <p class="info_akun">Level : <?php
                        echo "<span>" . $username . "</span>";
                        ?></p>
                </div>
            </div>
            <div class="kiri">
                
                <img src="Asset/maskot.png" alt="Maskot" class="kanan__img">
            </div>
        </div>
    </main>
    <footer>
        <nav class="nav bd-grid">
            <div>
                <button><a href="index.php">BERANDA</a></button>
            </div>
            <div>
                
            </div>
        </nav>
    </footer>
</body>
</html>
