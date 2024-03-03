<?php
$nama = $_GET['nama'];
$product = $_GET['product'];
$jumlah = $_GET['jumlah'];

// Daftar harga produk
$harga_tv = 4200000;
$harga_kulkas = 3200000;
$harga_mesin_cuci = 3800000;

// Menghitung total harga berdasarkan produk yang dipilih
if ($product === 'TV') {
    $total_harga = $jumlah * $harga_tv;
} elseif ($product === 'KULKAS') {
    $total_harga = $jumlah * $harga_kulkas;
} elseif ($product === 'MESIN CUCI') {
    $total_harga = $jumlah * $harga_mesin_cuci;
} else {
    $total_harga = 0; // Default jika produk tidak valid
}

// Menampilkan hasil
echo '<h2>Hasil Belanja Online</h2>';
echo 'Nama Customer: ' . $nama . '<br>';
echo 'Produk Pilihan: ' . $product . '<br>';
echo 'Jumlah Barang: ' . $jumlah . '<br>';
echo 'Total Harga: Rp ' . number_format($total_harga, 0, ',','.');
?>