<?php
// Deklarasi variabel
$gaji_pokok = "6000000"; // Gaji pokok
$potongan = "500000";    // Potongan seperti pajak atau BPJS
$jam_lembur = "5";      // Jumlah jam lembur
$upah_lembur_per_jam = 50000; // Upah lembur per jam

// Menghitung total lembur
$total_lembur = $jam_lembur * $upah_lembur_per_jam;

// Menghitung total gaji per bulan
$total_gaji = ($gaji_pokok + $total_lembur) - $potongan;

// Tampilkan total gaji
echo "Gaji Pokok : Rp" .number_format($gaji_pokok). "<br>";
echo "Potongan : Rp" .number_format($potongan). "<br>";
echo "Jam Lembur : Rp" .$jam_lembur. "<br>";
echo "Upah Lembur Per Jam : Rp" .$upah_lembur_per_jam. "<br>";
echo "Total gaji per bulan: Rp" .number_format($total_gaji);
?>
