<?php
// membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "perkenalkan, nama saya ".$nama."br/>";
    echo "senang berkenalan dengan anda<br/>";
}
// memanggil fungsi yang sudah dibuat
perkenalan("khusnul mubaroq", "Hi");
echo "<hr>";
$saya = "khusnul mubaroq";
$ucapansalam = "selamat pagi";
// memanggilanya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>