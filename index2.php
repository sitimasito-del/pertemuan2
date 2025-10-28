<?php
// Diketahui
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05;
$hutang_b = 9500000;
$bunga_b = 0.045;


$bunga_hutang_a = $hutang_a * $bunga_a;
$bunga_hutang_b = $hutang_b * $bunga_b;


$total_bunga = $bunga_hutang_a + $bunga_hutang_b;


$total_hutang = ($hutang_a + $hutang_b) + $total_bunga;


$sisa_uang = $pemasukan - $total_hutang;

echo "TAMPILAN HASIL <br>";
echo "Sisa Uang = Rp $sisa_uang <br>";
echo "Total Hutang = Rp $total_bunga <br>";
echo "Sisa uang = Rp $sisa_uang <br>";
?>
