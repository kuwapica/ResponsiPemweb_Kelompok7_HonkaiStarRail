document.addEventListener("DOMContentLoaded", () => {
    const karakterTerpilih = JSON.parse(localStorage.getItem('karakterTerpilih')) || [];
  
    if (karakterTerpilih.length === 0) {
      alert("Tidak ada karakter yang dipilih. Silakan kembali ke halaman sebelumnya.");
      return;
    }
  
    const table = document.getElementById('karakterTerpilih');
    let index = 0;
  
    // Masukkan gambar ke tabel
    for (let row of table.rows) {
      for (let cell of row.cells) {
        if (karakterTerpilih[index]) {
          const img = document.createElement('img');
          img.src = karakterTerpilih[index];
          img.alt = "Karakter";
          img.style.height = "100px"; // Sesuaikan ukuran gambar
          cell.appendChild(img);
          index++;
        }
      }
    }
  });

  