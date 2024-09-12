<?php
// Mencari semua simbol (karakter yang bukan huruf atau angka)
$teks = "selamat ulang tahun yang ke-17!";

// Mencari semua simbol (karakter yang bukan huruf atau angka)
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);
// tanda 'adalah pola pattern' -> memiliki fungsi untuk pemilihan
// variabel $teks adalah nilai subjek
// variabel $matches objek yang sudah dibuat
// pola pattern -> Regular Expression (Regex)

// fungsi count untuk menghitung jumlah elemen dalam array
if (count ($matches [0]) > 0) {
    // array unique berfungsi untuk menghilangkan duplikasi simbol 
    $uniqueSymbols = array_unique($matches [0]);
    echo "Karakter yang terdapat pada kalimat : " .implode(', ', $uniqueSymbols);
    // implode untuk menambahkan jarak 
    // untuk menggabungkan semua simbol dan dipisahkan dengan string koma
    // untuk menggabungkan elemen array menjadi string dengan pemisahan tertentu
} else {
    echo "Tidak terdapat simbol pada kalimat.";
}
?>