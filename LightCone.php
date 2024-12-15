<?php
include 'function.php'; // Pastikan koneksi database Anda di sini

// Terima data JSON dari fetch API
$inputData = json_decode(file_get_contents("php://input"), true);

if (isset($inputData['characters']) && is_array($inputData['characters'])) {
    $id_user = 1; // Contoh ID pengguna, ganti dengan data dari sesi atau autentikasi
    foreach ($inputData['characters'] as $index => $charName) {
        $id_selectchar = uniqid(); // Membuat ID unik untuk setiap karakter

        // Prepared statement untuk menyimpan ke database
        $stmt = $koneksi->prepare("INSERT INTO selected_chara (id_selectchar, id_user, id_chara) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $id_selectchar, $id_user, $charName);

        if ($stmt->execute()) {
            echo "Karakter $charName berhasil disimpan.<br>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }

        $stmt->close();
    }
} else {
    echo "Tidak ada karakter yang dipilih.";
}

$koneksi->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Light Cone</title>
    <link rel="stylesheet" href="light_cone/styleLC.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <div class="kanan">
          <div id="sub-kanan">

            <div class="judul">
              <h1>Light Cone</h1>
            </div>
            <p>
                selamat datang pada tahap pemilihan light cone
                dimana kalian harus mencari pasangan light cone dari path yang sudah ada pada masing - masing karakter yang telah kalian pilih.
                <br><br>
                cermatilah agar tidak salah dalam memilih pasangan light cone karena pada tahap inilah pointmu akan dipertaruhkan.
                <br><br>
                light cone akan sangat membantumu dalam melawan enemy, 
                tunjukan kalo team yang kamu bentuk memang layak untuk menang!!
            </p>
          </div>
          <div>
            <table style="margin-top: 15px;" id="karakterTerpilih">
              <td></td>
              <td></td>
              <td></td>
            </table>
          </div>
        </div>
        <div class="kiri">
          <table>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/cornucopia.png" alt="" class="Cornucopia"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/collapsing_sky.png" alt="" class="CollapsingSky"></td>
              
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/Adversarial.png" alt="" class="Adversarial"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/Chorus.png" alt="" class="Chorus"></td>
              
            </tr>
            <tr>
              <td><img  onclick="pilihGambar(this)" src="Asset/Amber.png" alt="" class="Amber"></td>
              <td><img  onclick="pilihGambar(this)" src="Asset/Void.png" alt="" class="Void"></td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <footer>
      <nav class="nav bd-grid">
        <div><button><a href="LightConeTL.php">NEXT</a></button></div>
      </nav>
    </footer>
    <script src="light_cone/scriptLc.js"></script>
  </body>
</html>
