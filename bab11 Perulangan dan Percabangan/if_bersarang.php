<?php

//deklarasi dan pemberian nilai variabel nilai 
$nilai = 80;

//deklarasi dan pemberian nilai variabel alpha
$alpha = 5;

//jika nilai diatas 75 maka siswa dinyatakan lulus
if ($nilai > 75) {
     //jika alpha diatas 3 maka siswa dinyatakan tidak lulus
     if ($alpha > 3) {

        //menampilkan output siswa tidak lulus
        echo "Anda dinyatakan TIDAK LULUS";
     }
     else {
         //menampilkan output siswa dinyatakan lulus
         echo "Anda dinyatakan LULUS";
     }
}

?>