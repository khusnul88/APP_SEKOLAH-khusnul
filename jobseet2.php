<?php
for($i=1;$i<10;$i++)
    if($i % 2 == 0){
    echo "<br> ini kata ke - ".$i;
}
?>
<br>
<?php
$i =0;
while($i <= 4) {
    echo "*";
    $j = 1;
    while($j <= $i) {
        echo "*";
        $j++;
}
$i++;
echo "<br>";
}
?>

<?php
$i =1;
do{
    echo "$i <br>";
    $i++;
}while($i <= 100);
?>

