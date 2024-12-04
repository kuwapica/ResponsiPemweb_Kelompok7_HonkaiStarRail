<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="beranda/style.css"> 
</head>
<body>
    <header>
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Honkai Star rail Manager</a>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link active">Beranda</a></li>
                    <li class="nav__item"><a href="Enemy/Bos1.php" class="nav__link">Enemy</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Character</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Light Cone</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="kanan">
                <img src="beranda/maskot.png" alt="Maskot" class="kanan__img">
            </div>
            <div class="kiri">
                <div class="judul">
                    <h1>SELAMAT DATANG <span class="user"></span> “USERNAME" Trailblazer!</h1>
                </div>
                <p>
                    Keberanian dan kecerdasanmu kini akan diuji. Pimpin armada ini melewati bintang-bintang, hadapi ancaman tak terduga, dan kelola team pahlawan yang beragam dengan kebijaksanaanmu. 
                    Mulai dari misi eksplorasi hingga pertempuran strategis, setiap keputusanmu akan menentukan nasib galaksi. 
                    Siapkah kamu untuk memimpin? Takdir Galaksi Ini Ada Di tanganmu, Buktikan kalau kamu mampu memimpin tim ini!
                </p>
            </div>
        </div>
    </main>
    <footer>
        <nav class="nav bd-grid">
            <div>
                <button><a href="#">EXIT</a></button>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><button><a href="#">Game Rules</a></button></li>
                    <li class="nav__item"><button><a href="#">START</a></button></li>
                </ul>
            </div>
        </nav>
    </footer>
</body>
</html>
