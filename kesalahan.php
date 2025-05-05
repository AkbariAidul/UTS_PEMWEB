<!-- Kesalahan code awal :
 1. $_POST['nama'] dicek, tapi pengambilan nilainya malah $_POST['Nama'] (huruf besar/kecil tidak sama).
 2. Penggunaan echo \"teks\"; seharusnya tidak perlu escape (\), cukup "teks" atau 'teks'.
 -->

<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    echo "Halo " . $nama;
} else {
    echo "Nama belum diisi";
}
?>
