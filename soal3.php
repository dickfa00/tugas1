<?php
echo "<h1>FUNGSI</h1><hr>";


function hallo($daerah){
	echo "PERKENALKAN NAMA SAYA DICKY<br> PUTRA ASLI DARI BANYUWANGI $daerah <br>";
	echo "Panggil Fungsi Dalam Fungsi <br>";
    echo"Hasil Perhitungan adalah : " . hitung(16, 8);
}

function hitung($nilai1, $nilai2){
       $hasil =$nilai1 + $nilai2;
       return $hasil;
}
echo "Bagian Pemanggil Fungsi <br>";
hallo("JAWA TIMUR");




echo "Panggil Fungsi Lagi <br>";
hallo("INDONESIA");

echo "<br>Panggil Fungsi Return <br>";
echo"Hasil Perhitungan adalah : " . hitung(10, 8);

?>