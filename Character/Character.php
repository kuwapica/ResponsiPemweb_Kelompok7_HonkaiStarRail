<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="styleChr.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <div class="kanan">
          <div id="sub-kanan">

            <div class="judul">
              <h1>Character </h1>
            </div>
            <p>
              Pilihlah Karakter yang saling 
              mendukung satu sama lain 
              untuk keberhasilan team yang 
              akan anda bentuk!!
            </p>
          </div>
          <div>
            <table style="margin-top: 10px;">
              <td onclick="tempatkanGambar(this)">+</td>
              <td onclick="tempatkanGambar(this)">+</td>
              <td onclick="tempatkanGambar(this)">+</td>
            </table>
          </div>
        </div>
        <div class="kiri">
          <table>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="asset/Firefly_splashArt.png" alt="" class="Firefly"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/Jiaoqiu_splashArt.png" alt="" class="Jiaoqiu"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/topaz_splashArt.png" alt="" class="Topaz"></td>
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="asset/jingliu_splashArt.png" alt="" class="Jingliu"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/Gepard_splashArt.png" alt="" class="Gepard"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/RuanMei_splashArt.png" alt="" class="RuanMei"></td>
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="asset/Feixiao_splashArt.png" alt="" class="Feixiao"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/BlackSwan_splashArt.png" alt="" class="BlackSwan"></td>
              <td><img  onclick="pilihGambar(this)" src="asset/Huohuo_splashArt.png" alt="" class="Huohuo"></td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <footer>
      <nav class="nav bd-grid">
        <div>
          <button><a href="../index.php">BACK</a></button>
        </div>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <button><a href="#">Game Rules</a></button>
            </li>
            <li class="nav__item">
              <button><a href="Bos2.html">NEXT</a></button>
            </li>
          </ul>
        </div>
      </nav>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
