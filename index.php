<?php
// Variabel
echo "Biodata<br>";

$siswa = "<br>Nama : Chiara Chatlina Salsabilla";
$kelas = "<br>Kelas : XI RPL 4";
$alamat = "<br>Alamat : Jl. Danau Towuti IV, Sawojajar";
$kelamin = "<br>Kelamin : Perempuan";

echo $siswa;
echo $kelas;
echo $alamat;
echo $kelamin;


// Menghitung Luas Segitiga (OPERATOR)
$a = 5;
$b = 7;
$hasil= 1/2 ($a * $b);

echo $hasil;

// Kondisi 
$harga =8000;
if ($harga < 5000){
    echo "saya akan beli kopi";
} else if ($harga <=8000){
    echo "saya akan menawar";
}else{
    echo "Saya tidak membeli";
}


function quote(){
    echo "Yahoo!";
}
quote();
?>