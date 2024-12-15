<?php
$koneksi = mysqli_connect("localhost","root","","pemweb_hsr") or die("Koneksi gagal"); //membuat koneksi

//function yang menerima inputan data 

function query ($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi ($data) {
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $konfir_pw = mysqli_real_escape_string($koneksi, $data["konfir-pw"]);

    // Validasi input
    if (empty($username) || empty($email) || empty($password) || empty($konfir_pw)) {
        echo "<script>
                alert('Harap lengkapi semua field!');
                document.location.href = 'register.php';
            </script>";
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);
    $user = mysqli_fetch_assoc($result);
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $konfir_pw) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT); //password default adalah algoritma enkripsi yang digunakan oleh php untuk mengenkripsi password secara default program

    //tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')");
    return mysqli_affected_rows($koneksi);
}

// // Simpan karakter yg dipilih skor ke database
// // Simpan data ke database
// $sql = "INSERT INTO Scores (user_name, 
//         character_1, character_2, character_3, 
//         weapon_1, weapon_2, weapon_3) 
//         VALUES (
//         '{$selected_characters[0]}', '{$selected_characters[1]}', '{$selected_characters[2]}',
//         '{$weapons[$selected_characters[0]]}', '{$weapons[$selected_characters[1]]}', '{$weapons[$selected_characters[2]]}')";
// mysqli_query($koneksi, $sql);


?>



