<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Character</title>
    <link rel="stylesheet" href="Character/styleChr.css" />
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
            <table style="margin-top: 10px;" id="dipilih">
            <td onclick="tempatkanGambar(this)" data-src="">+</td>
            <td onclick="tempatkanGambar(this)" data-src="">+</td>
            <td onclick="tempatkanGambar(this)" data-src="">+</td>
            </table>
          </div>
        </div>
        <div class="kiri">
          <table>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/Firefly_splashArt.png" data-src="Asset/Firefly_splashArt.png" alt="" class="Firefly"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/Jiaoqiu_splashArt.png" data-src="Asset/Jiaoqiu_splashArt.png" alt="" class="Jiaoqiu"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/topaz_splashArt.png" data-src="Asset/topaz_splashArt.png" alt="" class="Topaz"></td>
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/jingliu_splashArt.png" data-src="Asset/jingliu_splashArt.png" alt="" class="Jingliu"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/Gepard_splashArt.png" data-src="Asset/Gepard_splashArt.png" alt="" class="Gepard"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/RuanMei_splashArt.png" data-src="Asset/RuanMei_splashArt.png" alt="" class="RuanMei"></td>
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/Feixiao_splashArt.png" data-src="Asset/Feixiao_splashArt.png" alt="" class="Feixiao"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/BlackSwan_splashArt.png" data-src="Asset/BlackSwan_splashArt.png" alt="" class="BlackSwan"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/Huohuo_splashArt.png" data-src="Asset/Huohuo_splashArt.png" alt="" class="Huohuo"></td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <footer>
      <nav class="nav bd-grid">
        <div>
          <button><a href="index.php">BACK</a></button>
        </div>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <button><a href="rules.php">Game Rules</a></button>
            </li>
            <li class="nav__item">
              <button onclick="kirimKarakter()"><a href="LightCone.php">Pilih</a></button>
            </li>
          </ul>
        </div>
      </nav>
    </footer>
    <script src="Character/script.js"></script>
    <script>

    </script>
  </body>
</html>
