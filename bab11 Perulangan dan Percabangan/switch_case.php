<?php

// //variabel kode menu
// $kode_menu = 2;

// //variabel total harga
// $harga = 0;

// //variabel bertipe string, untuk menyimpan nama paket
// $paket_menu = "";

// //statement switch dengan acuan variabel $kode_menu
// switch ($kode_menu) {
//     case 1:
//         $paket_menu = "Paket 1";
//         $harga = 10000;
//     case 2:
//         $paket_menu = "Paket 2";
//     break;
//     case 3:
//         $paket_menu = "Paket 3";
//         $harga = 15000;
//     break;
// }

// //menampilkan output nama paket
// echo "Anda memilih " . $paket_menu . '<br/>';
// echo "harga : Rp. " . $harga;








//switvh case - mas alfan

// switch

$barang = 2;
$harga = 0;
$diskon = 0;

switch ($barang) {
    case 1;
        $harga = 20000;
    break;

    case 2;
        $harga = 30000;
    break;

    case 3;
        $harga = 40000;
        $diskon = 20/100;
}

echo "barang yg dibeli = " . $barang . "<br/>";
echo "harga = " .$harga;

// <!-- quiz 2
// 1. Barang ada 3, harganya (20.000, 30.000, 50.000)
// 2. Diskon barang 3: 20%
// 3. Ketika total bayar > 75.000 dapat diskon 15%
// 4. Diskon hanya boleh salah satu, dipilih diskon yang terbesar
// 5. Hitung jumlah bayar
//  -->

 
?>