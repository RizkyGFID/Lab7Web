# Pertemuan 9
Halo, sebelumnya nama saya Ahmad Rizky Pramudia Pratama dengan NIM 312410272 Kelas TI.24.A4
Disini saya akan mempelajari tentang PHP Dasar

PHP adalah singkatan dari PHP Hypertext Prepocessor dan merupakan bahasa
pemrograman yang di desain khusus untuk web development atau pengembangan web.
PHP memiliki sifat Server-Side karena PHP dijalankan atau di eksekusi dari sisi server.
maksud di jalankan dari sisi server adalah PHP di jalankan pada komputer server dan
bukan pada komputer client. PHP di jalankan melalui aplikasi web browser sama halnya
seperti HTML. Hampir semua situs-situs besar dan populer di kembangkan menggunakan
PHP. seperti misalnya wordpress, joomla, facebook, twitter, wikipedia dan situs besar
lainnya.

Untuk memulai membuat kode php dasar, perlu disiapkan web server dan interpreter PHP
terlebih dahulu. Web server yang kita gunakan adalah Apache 2 dan interpreter PHP 7.
disini sayaa gunakan aplikasi bundle web server yaitu XAMPP.

XAMPP Control Panel bisa didownload lewat link berikut
https://www.apachefriends.org/download.html

<img src="Lab7/Langkah 1.png" alt="Tutorial" width="400">

Konfigurasi Web Server
• Konfigurasi Apache
Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul
yang diaktifkan, lokasi document root, dll.
Lokasi file: \xampp\apache\conf\httpd.conf

<img src="Lab7/Langkah 2.png" alt="Tutorial" width="400">

• Konfigrasi PHP
Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa.
Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error
reporting, dll.
Lokasi file: \xampp\php\php.ini

<img src="Lab7/Langkah 3.png" alt="Tutorial" width="400">

• Konfigrasi MySql
Konfigurasi server MySQL, seperti administrator user, port, timezone, dll.
Lokasi file: \xampp\mysql\bin\my.ini

<img src="Lab7/Langkah 4.png" alt="Tutorial" width="400">

Disini kalian bisa menjalankan web server di menu XAMPP Control Panel seperti berikut

<img src="Lab7/Langkah 7.png" alt="Tutorial" width="400">

Untuk menguji coba apakah server sudah berkerja dengan baik, bisa akses link dibawah
http://127.0.0.1 atau http://localhost

# Memulai PHP
Disini saya buat folder dengan nama lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

<img src="Lab7/Langkah 8.png" alt="Tutorial" width="400">

Kemudian kalian akses filenya melalui link ini
http://localhost/lab7_php_dasar/

<img src="Lab7/Langkah 9.png" alt="Tutorial" width="400">

Disini saya buat file baru dengan nama php_dasar.php pada directory tersebut
Kemudian saya buat kode seperti ini

<img src="Lab7/Langkah 10.png" alt="Tutorial" width="400">

Lalu untuk mengakses hasilnya melalui URL dibawah ini
http://localhost/lab7_php_dasar/php_dasar.php

<img src="Lab7/Langkah 11.png" alt="Tutorial" width="400">

Di directory tadi, saya bisa menambahkan variable pada program seperti ini

<img src="Lab7/Langkah 12.png" alt="Tutorial" width="400">

Hasilnya akan berubah jadi seperti ini

<img src="Lab7/Langkah 13.png" alt="Tutorial" width="400">

Predefine Variable $_POST dan membuat form input

<img src="Lab7/Langkah 14.png" alt="Tutorial" width="400">

Hasilnya akan seperti ini

<img src="Lab7/Langkah 15.png" alt="Tutorial" width="400">

# Operator

<img src="Lab7/Langkah 16.png" alt="Tutorial" width="400">

# Kondisi IF

<img src="Lab7/Langkah 17.png" alt="Tutorial" width="400">

# Kondisi Switch

<img src="Lab7/Langkah 18.png" alt="Tutorial" width="400">

# Perulangan For

<img src="Lab7/Langkah 19.png" alt="Tutorial" width="400">

<img src="Lab7/Langkah 20.png" alt="Tutorial" width="400">

# Perulangan While

<img src="Lab7/Langkah 21.png" alt="Tutorial" width="400">

<img src="Lab7/Langkah 22.png" alt="Tutorial" width="400">

# Perulangan Dowhile

<img src="Lab7/Langkah 23.png" alt="Tutorial" width="400">

<img src="Lab7/Langkah 24.png" alt="Tutorial" width="400">

# Tugas
Disini saya membuat program PHP sederhana dengan menggunakan form input
yang menampilkan nama, tanggal lahir dan pekerjaan. Lalu tampilkan outputnya
dengan menghitung umur berdasarkan inputan tanggal lahir. Dan beberapa pilihan
gaji yang berbeda-beda sesuai pilihan pekerjaan

Pertama-tama saya mau membuat file directory baru dengan nama php_sederhana.php
Lalu saya isi kodenya seperti berikut

```
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir" required><br><br>
        Pekerjaan:
        <select name="pekerjaan" required>
            <option value="">Pilih Pekerjaan</option>
            <option value="guru">Guru</option>
            <option value="dokter">Dokter</option>
            <option value="programmer">Programmer</option>
            <option value="pegawai">Pegawai</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        // Tentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch ($pekerjaan) {
            case "guru":
                $gaji = 4000000;
                break;
            case "dokter":
                $gaji = 10000000;
                break;
            case "programmer":
                $gaji = 8000000;
                break;
            case "pegawai":
                $gaji = 3000000;
                break;
            default:
                $gaji = 0;
        }

        echo "<h3>Hasil Input</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Pekerjaan: " . ucfirst($pekerjaan) . "<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
```

Kemudian hasilnya bisa diakses melalui URL berikut
http://localhost/lab7_php_dasar/php_sederhana.php

<img src="Lab7/Langkah 25.png" alt="Tutorial" width="400">
