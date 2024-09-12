<?php
// parameter pariadik -> berfungsi untuk menampung banyak argumen
function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];
    $arrBenar = [];// untuk menyimpan hasil penilaian jawaban

    // foreach adalah perulangan untuk array
    // untuk cek jawaban yang diberikan user dengan jawaban yang benar
    // key adalah jawaban di aliaskan lagi menjadi value
    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1; // jawaban benar
        } else {
            $arrBenar[$key] = 0; // jawaban salah
        }
    }

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
    // count memiliki fungsi untuk menghitung jumlah array 
    // array_keys mengambil semua index (key) dari sebuah array asosiatif dan mengembalikan hasilnya dalam bentuk array.
}

checkJawaban("Putri", "A",  "D", "B", "C", "E", "B", "B", "A", "Z", "Z");
?>