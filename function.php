<?php
//function define by user

//fungsi yang tidak mengemblikakan nilai
function salam(){
    echo "Assalamualaikum apa kabar..";
}
salam(); //cetaknya

echo "<br>";

function panggil($arg1){
    echo "Halo apa kabar mba $arg1";
}
panggil ("nesya");

echo "<br>";

//fungsi yang maengembalikan 
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,7);

echo "<br>";

//buat fungsi hitung umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2005);

?>