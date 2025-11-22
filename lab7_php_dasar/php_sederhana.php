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
