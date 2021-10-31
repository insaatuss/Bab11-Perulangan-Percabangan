<?php

//definisikan variabel nilai dengan tipe integer
$nilai = 80;

//menampilkan text awalan
echo "Nilai Anda : ";

//cek apakah nilai lebih dari 50
if ($nilai <25) {
    
    //menampilkan label nilai D
    echo "D";
}
elseif ($nilai <50) {

    //menampilkan label nilai C
    echo "C";
}
elseif ($nilai < 75) {

    //menampilkan label nilai B
    echo "B";
}
elseif ($nilai <100) {

    //menampilkan label nilai A
    echo "A";
}

?>