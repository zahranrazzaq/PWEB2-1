<?php
$ar_buah = ["semangka", "mangga", "pisang", "sirsak"];


echo "buah ke 2 adalah $ar_buah[2]";

echo "<br>Jumlah array: ". count($ar_buah);

echo '<ol>';
foreach($ar_buah as $_buah){
    echo'<li>'.$_buah. '</li>';
}

echo '</ol>';
$ar_buah[]="nanas";

unset($ar_buah[1]);

$ar_buah[4]="melon";

echo'<ul>';
foreach($ar_buah as $ak => $av){
    echo'<li>Index: '.$ak.'- Nama Buah: '.$av.'</li>';
}

?>