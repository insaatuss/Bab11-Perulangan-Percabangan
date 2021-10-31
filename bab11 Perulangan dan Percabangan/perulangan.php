<?php

//for
/* pertambahan */
//  for ( $i = 1; $i <= 10; $i++ ) {
//     echo  $i . "<br />";
//  }

 /* perkalian kudrat */
// for ( $i = 1; $i <= 10; $i++ ) { // $i = $i * 2
//     $hasil = 2**$i;
//     echo $hasil . " adalah kelipatan 2 <br />";
// }


//while
//searching algoritma
// $buah = array ("mangga", "pisang", "jambu", "apel", "jeruk");

// $cari = "jeruk";
// $i = 0;


// echo "ukuran array = " . sizeof($buah) . "<br />";

// while ( $i < sizeof($buah) ) {

//     echo "pengecekan apakah " . $cari . '=' . $buah[$i] . "<br />";
//     if ( $cari == $buah[$i] ) {
//         echo $cari . " ditemukan pada index ke-" . $i;
//         break;
//     }

//     $i++;
// }

// do while

// $i = 1;

// do {

//     echo $i . "<br />";
//     $i++;
// } while ($i <= 10);

//blog foreach

// $blog = array (
//     (object) array (
//         "judul" => 
//     )
// )


// QUIS
// Tampilkan deret bilangan prima
// 1,3,5, dst <20

for ( $i = 1; $i <= 20; $i++ ) {
    $a = 0;
    for ($j=1; $j<=$i; $j++) { // pembagi bilangan
        if ($i % $j == 0) { // modulus
            $a++;
        }
    }
    if ($a == 2) {
        echo  $i . "<br />";
    }
}


?>