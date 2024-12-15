<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Light Cone</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="light_cone/styleLC.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <div class="kanan" id="kanan">
          <div id="sub-kanan">
            <div class="judul">
              <h1 style="color: yellow">Cornucopia</h1>
            </div>
            <div
              style="
                display: flex;
                height: 100%;
                width: 100%;
                margin-top: 20px;
                gap: 240px;
              "
            >
              <table style="padding: 0; margin: 0; height: 185px">
                <td onclick="tempatkanGambar(this)">+</td>
              </table>
              <img
                src="Asset/corpunia_tl.png"
                alt=""
                style="padding: 0; margin: 0; height: 185px; width: auto"
              />
            </div>
          </div>
          <div>
            <p>
              Light Cone khusus untuk karakter dengan Path Abundance. <br />
              Kelangkaan: <i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <br />
              Skill : Meningkatkan 12% Outgoing Healing saat pengguna
              melancarkan Skill atau Ultimate. <br />
              deskripsi Singkat: <br />
              “Kehidupan adalah keberadaan keteraturan yang melampaui ambang
              batas tertentu. Kelahirannya adalah jawaban akhir dari alam
              semesta yang mati, yang menyatakan bahwa zaman kekacauan kuno
              telah berlalu."
            </p>
          </div>
        </div>

        <div class="kiri">
          <table>
            <tr>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/cornucopia.png"
                  alt=""
                  class="Cornucopia"
                />
              </td>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/collapsing_sky.png"
                  alt=""
                  class="CollapsingSky"
                />
              </td>
            </tr>
            <tr>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/Adversarial.png"
                  alt=""
                  class="Adversarial"
                />
              </td>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/Chorus.png"
                  alt=""
                  class="Chorus"
                />
              </td>
            </tr>
            <tr>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/Amber.png"
                  alt=""
                  class="Amber"
                />
              </td>
              <td>
                <img
                  onclick="pilihGambar(this)"
                  src="Asset/Void.png"
                  alt=""
                  class="Void"
                />
              </td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <footer>
      <nav class="nav bd-grid">
        <div>
          <button><a href="game1.php">NEXT</a></button>
        </div>
      </nav>
    </footer>
    <script src="light_cone/scriptTl.js"></script>
  </body>
</html>
