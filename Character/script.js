let gambarTerpilih = null; // Variabel untuk menyimpan gambar yang dipilih

// Fungsi untuk memilih gambar
function pilihGambar(img) {
  if (img.classList.contains('disabled')) {
    alert("Gambar ini sudah dipilih dan sedang digunakan.");
    return;
  }

  gambarTerpilih = img.cloneNode(true); // Membuat salinan gambar
  img.classList.add('disabled'); // Menandai gambar sebagai tidak aktif
  alert("Gambar terpilih! Klik pada tanda '+' untuk menempatkan atau menghapus gambar.");

  // Ubah konten <h1> jika gambar memiliki kelas "bono"
  if (img.classList.contains('Topaz')) {
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;">Topaz</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/fire.png" alt="" style="height: 70px;">
                  <h6>Fire</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Hunt.png" alt="" style="height: 70px;">
                  <h6>Hunt</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Salah satu manajer tingkat tinggi "Departemen Investasi Strategis" di bawah Interastral Peace Corporation, dan juga pemimpin dari Tim Piket Utang Khusus</p>
              </h3>
            </div>
            <div>
              <img src="asset/Topaz-awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Jiaoqiu')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;">Jiaoqiu</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/fire.png" alt="" style="height: 70px;">
                  <h6>Fire</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Nihility.png" alt="" style="height: 70px;">
                  <h6>Nihility</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Seorang dokter dan konselor Foxian di Xianzhou "Yaoqing". Dia selalu menyambut orang dengan senyuman, tapi sebenarnya cerdik dan pandai berstrategi. Dia berasal dari keluarga terkenal di Alchemy Commission.
              </h3>
            </div>
            <div>
              <img src="asset/Jiaoqiu awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Firefly')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: aqua;">Firefly</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/fire.png" alt="" style="height: 70px;">
                  <h6>Fire</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Destruction.png" alt="" style="height: 70px;">
                  <h6>Destruction</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Anggota Stellaron Hunter yang bertempur mengenakan zirah mekanis "SAM". Dia setia pada misinya dan pantang menyerah. Terlahir sebagai senjata untuk mengalahkan Swarm, kecepatan pertumbuhannya jauh di atas rata-rata, tetapi umur hidupnya sangat singkat.
              </h3>
            </div>
            <div>
              <img src="asset/Firefly awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Jingliu')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: rgb(207, 24, 192);">Jingliu</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Ice.png" alt="" style="height: 70px;">
                  <h6>Ice</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Destruction.png" alt="" style="height: 70px;">
                  <h6>Destruction</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Salah satu dari "Lima Petinggi Cloud" yang legendaris, dengan gelar "Transcendent Flash". Dia telah melampaui konflik duniawi, dan memilih menempuh jalan yang berbeda untuk memperoleh kekuatan yang dapat mengalahkan "dewa".
              </h3>
            </div>
            <div>
              <img src="asset/Jingliu awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Gepard')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: rgb(36, 166, 226);">Gepard</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Ice.png" alt="" style="height: 70px;">
                  <h6>Ice</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Preservation.png" alt="" style="height: 70px;">
                  <h6>Preservation</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Kapten Silvermane Guard, salah satu tentara terbaik Belobog. Dia bertindak sesuai dengan perkataannya, teliti, waspada dan selalu jujur pada dirinya sendiri.
              </h3>
            </div>
            <div>
              <img src="asset/Gepard awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('RuanMei')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: blue;">Ruan Mei</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Ice.png" alt="" style="height: 70px;">
                  <h6>Ice</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Harmony.png" alt="" style="height: 70px;">
                  <h6>Harmony</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Seorang anggota Genius Society dan ahli bidang ilmu kehidupan. Dia bekerja sama dengan Herta dan timnya untuk mengembangkan Simulated Universe.
              </h3>
            </div>
            <div>
              <img src="asset/Ruan Mei awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Feixiao')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: rgb(230, 230, 8);">Feixiao</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Wind.png" alt="" style="height: 70px;">
                  <h6>Wind</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Hunt.png" alt="" style="height: 70px;">
                  <h6>Hunt</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Merlin's Claw dari Xianzhou "Yaoqing" dan salah satu dari Tujuh Jenderal Arbiter. Dia adalah individu yang unik dan berjiwa bebas, serta lugas dan menawan. Dia mahir dalam berbagai seni bela diri dan telah melatih tubuhnya hingga tingkat tertinggi.
              </h3>
            </div>
            <div>
              <img src="asset/Feixiao.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('BlackSwan')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: blueviolet;">Black Swan</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Wind.png" alt="" style="height: 70px;">
                  <h6>Wind</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Nihility.png" alt="" style="height: 70px;">
                  <h6>Nihility</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Memokeeper dari "Garden of Recollection", peramal yang misterius dan elegan. Dia selalu tersenyum dengan lembut, mendengarkan ucapan orang lain dengan sabar, dan memanfaatkannya untuk masuk ke dalam "memori" dan menguasai seluruh informasi.
              </h3>
            </div>
            <div>
              <img src="asset/Black Swan awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }else if(img.classList.contains('Huohuo')){
    document.getElementById('sub-kanan').innerHTML = `
      <h1 style="text-align: center;color: aqua;">Huohuo</h1>
          <div class="sub-kanan" style="display: flex;color: white;gap: 30px;">
            <div>
              <div style="display: flex;gap: 25px;">
                <div>
                  <h6>Element</h6>
                  <img src="asset/Wind.png" alt="" style="height: 70px;">
                  <h6>Wind</h6>
                </div>
                <div>
                  <h6>Path</h6>
                  <img src="asset/Abundance.png" alt="" style="height: 70px;">
                  <h6>Abundance</h6>
                </div>
              </div>
              <h3>Deskripsi Singkat: <br>
                Hakim magang Ten-Lords Commission dari Xianzhou Luofu, seorang gadis Foxian yang dirasuki oleh Heliobus.Dia adalah seorang gadis pemalu dan lemah yang takut pada segala macam hal-hal aneh, tapi bertanggung jawab untuk menarik dan menaklukkan roh jahat.
              </h3>
            </div>
            <div>
              <img src="asset/Huohuo awk.png" alt="" style="height: 250px;width: auto;">
            </div>
          </div>
    `;
  }
}

// Fungsi untuk menempatkan atau menghapus gambar dari sel bertanda "+"
function tempatkanGambar(td) {
  if (td.children.length > 0) { // Jika sel sudah berisi gambar
    let img = td.querySelector('img'); // Ambil gambar di dalam sel
    let originalImg = document.querySelector(`img[src='${img.src}']`);
    if (originalImg) {
      originalImg.classList.remove('disabled'); // Aktifkan kembali gambar asli
    }
    td.innerHTML = "+"; // Hapus gambar dan kembalikan tanda "+"
    alert("Gambar telah dihapus. Anda dapat memilih gambar lain.");
  } else if (gambarTerpilih) { // Jika ada gambar terpilih dan sel kosong
    td.innerHTML = ""; // Bersihkan tanda "+"
    td.appendChild(gambarTerpilih); // Tempatkan salinan gambar ke sel
    gambarTerpilih = null; // Reset gambar yang dipilih
  } else {
    alert("Pilih gambar terlebih dahulu!");
  }
}