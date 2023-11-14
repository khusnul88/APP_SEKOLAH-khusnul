<?php
$i = 20;
if($i < 20){
    echo"Benar";
}else{
    echo"salah";
}
?>

<?php
$nama = "andi";
if($nama == "andi"){
    echo "nama anda terdaftar";
}else{
    echo "nama anda tidak terdaftar";
}
?>

<?php
$nilai = 40;
if($nilai >= 80){
    echo"A";
}elseif($nilai >=70){
    echo"B";
}elseif($nilai >=60){
    echo"C";
}elseif($nilai >=50){
    echo"D";
}else{
    echo"E";
} o
?>

<?php
$predikat = "2";
switch($predikat)
{
    case "1" :
        echo "senin";
        break;
    case "2" :
        echo "selasa";
        break;
    case "3" :
        echo "rabu";
        break;
    case "4" :
        echo "kamis";
        break;
        default;
        echo "jumat";
        break;
    case "5" :
        break;
        echo "sabtu";
    case "6" :
        break;
    case "7" :
        break;
        echo "ahad";
    }
?>                                      