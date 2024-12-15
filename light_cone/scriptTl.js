let gambarTerpilih = null; // Variabel untuk menyimpan gambar yang dipilih

// Fungsi untuk memilih gambar
function pilihGambar(img) {

  gambarTerpilih = img.cloneNode(true); // Membuat salinan gambar
  img.classList.add("disabled"); // Menandai gambar sebagai tidak aktif


  // Ubah konten <h1> jika gambar memiliki kelas "bono"
  if (img.classList.contains("Chorus")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: rgb(17, 153, 216);">Chorus</h1>
<div id="sub-kanan">
   
    <div style="
                display: flex;
                height: 100%;
                width: 100%;
                margin-top: 20px;
                gap: 240px;
              ">
        <table style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/Chorus_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <h4 style="color:white;font-family: 'Radley';line-height: 24px;font-size: 14px;">
      Light Cone khusus untuk karakter dengan Path Harmony. <br>
      Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
      Skill : Setelah memasuki pertempuran, meningkatkan 8% ATK 
                  seluruh rekan tim. Efek dari jenis Kemampuan yang 
                  sama tidak dapat ditumpuk. <br>
      deskripsi Singkat: <br>
      "Jari-jari bersatu menjadi kepalan tinju, orang-orang bersatu menjadi kekuatan tanpa tanding. Kupersembahkan diriku lalu mendapatkan hasil yang lebih tinggi, yaitu 'kita'."
      
      
    </h4>
  </div>
</div>
`;
  } else if (img.classList.contains("Cornucopia")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: yellow;">Cornucopia</h1>
<div id="sub-kanan">
   
    <div style="
    display: flex;
    height: 100%;
    width: 100%;
    margin-top: 20px;
    gap: 240px;
  ">
        <table style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/corpunia_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <p>
      Light Cone khusus untuk karakter dengan Path Abundance. <br> 
      Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
      Skill : Meningkatkan 12% Outgoing Healing saat pengguna
                  melancarkan Skill atau Ultimate. <br>
      deskripsi Singkat: <br>
      “Kehidupan adalah keberadaan keteraturan yang melampaui ambang batas tertentu. Kelahirannya adalah jawaban akhir dari alam semesta yang mati, yang menyatakan bahwa zaman kekacauan kuno telah berlalu."      
    </p>
  </div>
</div>
`;
  } else if (img.classList.contains("Amber")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: rgb(25, 119, 25);">Amber</h1>

<div id="sub-kanan">
    <div style="
    display: flex;
    height: 100%;
    width: 100%;
    margin-top: 20px;
    gap: 240px;
  ">
        <table  style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/Amber_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <h4 style="color:white;line-height: 24px;font-family: ,Radley,;font-size: 14px;">
      Light Cone khusus untuk karakter dengan Path Preservation. <br>
      Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
      Skill : Meningkatkan 16% DEF pengguna. Saat HP pengguna saat 
                  ini kurang dari 50%, DEF pengguna akan 
                  mendapat 16% peningkatan tambahan. <br>
      deskripsi Singkat: <br>
      “Hanya hal-hal yang tidak dibatasi oleh waktu yang dapat bertahan dalam waktu." keheningan ini selalu jadi pertanyaan, tak ada kata berhenti hingga semua musuh dituntaskan      
    </h4>
  </div>
</div>
`;
  } else if (img.classList.contains("Void")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: rgb(28, 28, 145);">Void</h1>
<div id="sub-kanan">

    
   
    <div style="
    display: flex;
    height: 100%;
    width: 100%;
    margin-top: 20px;
    gap: 240px;
  ">
        <table style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/Void_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <h4 style="color:white;line-height: 24px;font-family: 'Radley';font-size: 14px;">
      Light Cone khusus untuk karakter dengan Path Nihility. <br>
      Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
      Skill : Saat pertempuran dimulai, meningkatkan 20% Effect Hit 
                  Rate pengguna selama 3 giliran. <br>
      deskripsi Singkat: <br>
      "Dia menatap ke dalam kehampaan, seperti matahari gelap yang bertengger di ujung segala sesuatu. Seperti mulut yang menjawab seluruh pertanyaan, dia berkata, "███ " Jawaban ini tidak dapat diekspresikan dalam bahasa manusia, tapi dapat didengar dan dimengerti oleh semua orang."      
    </h4>
  </div>
</div>

`;
  } else if (img.classList.contains("CollapsingSky")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: rgb(214, 151, 35);">Collapsing Sky</h1>
<div id="sub-kanan">

    
    
    <div style="
    display: flex;
    height: 100%;
    width: 100%;
    margin-top: 20px;
    gap: 240px;
  ">
        <table style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/collapsing_sky_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <h4 style="color:white;line-height: 24px;font-family: 'Radley';font-size: 14px;">
        Light Cone khusus untuk karakter dengan Path Destruction. <br>
Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
Skill : Meningkatkan 20% DMG yang diakibatkan Basic Attack
            dan Skill pengguna. <br>
deskripsi Singkat: <br>
"Lenyapnya segala sesuatu adalah hal yang wajar seperti kelahirannya. Di bawah sapuan waktu, semua benda berwujud akan terbakar menjadi abu." semua yang sudah ku terjang , takan kembali seperti semula


    </h4>
  </div>
</div>
`;
  } else if (img.classList.contains("Adversarial")) {
    document.getElementById("kanan").innerHTML = `
<h1 style="color: rgb(28, 28, 145);">Adversarial</h1>
<div id="sub-kanan">

    
    
    <div style="
    display: flex;
    height: 100%;
    width: 100%;
    margin-top: 20px;
    gap: 240px;
  ">
        <table style="padding: 0; margin: 0; height: 185px">
            <td onclick="tempatkanGambar(this)">+</td>
        </table>
        <img src="Asset/Adversarial_tl.png" alt="" style="padding: 0; margin: 0; height: 185px; width: auto">
    </div>
  </div>
  <div>
    <h4 style="color:white;line-height: 24px;font-family: 'Radley';font-size: 14px;">
        Light Cone khusus untuk karakter dengan Path Hunt. <br>
      Kelangkaan: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <br>
      Skill : Setelah pengguna mengalahkan target musuh, 
                  meningkatkan 10% SPD selama 2 giliran. <br>
      deskripsi Singkat:  <br>
      “Pejuang kemerdekaan tidak akan pernah mati, karena kisah mereka akan diceritakan selamanya. tak gentar, pantang mudur dan selalu jadi garis terdepan melawan ke tidak adilan""


    </h4>
  </div>
</div>
`;
  }
}


