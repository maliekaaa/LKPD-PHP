<?php 

function koin($uang) {
    $arr = [];

    $koinUang = substr($uang, -3);

    if ($koinUang % 500 != $koinUang) {
        $koinUang -= 500;
        array_push($arr, "Rp. 500");
}

    if ($koinUang % 200 != $koinUang) {
        $koinUang -= 200;
        array_push($arr, "Rp. 200");
}

    if ($koinUang % 100 != $koinUang) {
        $koinUang -= 100;
        array_push($arr, "Rp. 100");
}

    echo "Jenis koin untuk Uang Rp. " . number_format($uang,0,'.','.') . " : <br>";
    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>  $value  </li>";
    }echo "<ul>";
}


koin(1750);
?>