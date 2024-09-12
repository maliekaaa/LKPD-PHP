<?php
function createArray(...$jurusan) {
    $arr = [];
    foreach ($jurusan as $value) {
        // mengubah nama jurusan menjadi huruf kapital dan memeriksa apakah sudah
        if (in_array(strtoupper($value), $arr) == false) {
            array_push($arr, strtoupper($value));
        }
    }

    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
echo "<br>";
?>