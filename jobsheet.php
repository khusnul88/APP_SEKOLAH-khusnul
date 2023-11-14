
<?php
function nama($namadepan, $namabelakang) {
    return "$namadepan  $namabelakang";
}
echo nama("khusnul", "mubaroq")
?>

<?php
function cariDataBuah($namaBuah, $arrayBuah) {
    if (in_array($namaBuah, $arrayBuah)) {
        return "Data ditemukan";
    } else {
        return "Data tidak ditemukan";
    }
}
$buahBuahan = array("Apel", "Jeruk", "Mangga", "Pisang", "Semangka");
$namaBuahDicari = "Mangga";
echo cariDataBuah($namaBuahDicari, $buahBuahan);
?>