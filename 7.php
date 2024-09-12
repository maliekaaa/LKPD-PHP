<?php
function wrapText($lorem) {
    // mengubah string $text menjadi array karakter dengan str_split
    $count = str_split($lorem);
    // str_split untuk menghitung array dari 0 sampai sekian

    // count untuk menghitung jumlah elemen dalam array
    if (count($count) > 50) {
        // memmotong string $text hingga 50 karakter
        $text = substr($lorem, 0, 50);
        // menambahkan elipsis "..." di akhir string yang sudah di potong
        // .= disebut konket
        $text .= "...";
    }

    echo $text;
}

$kata = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie euismod sem, eu sollicitudin neque efficitur in. Quisque mollis libero orci, id lacinia ipsum sagittis non. Fusce vel elementum ligula.";

echo "Kalimat awal : " . $kata;
wrapText($kata);
?>