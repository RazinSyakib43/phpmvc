<?php

// Mendefinisikan class App
class App{
    // Membuat fungsi konstruktor
    public function __construct() {
        // Memanggil fungsi parseURL() untuk mendapatkan URL yang di-parse
        $url = $this->parseURL();
        // Menampilkan var_dump dari variabel $_GET untuk melihat data yang diterima melalui URL
        var_dump($_GET);
    }

    // Membuat fungsi parseURL()
    public function parseURL(){
        // Memeriksa apakah ada parameter 'url' yang diterima melalui metode GET
        if(isset($_GET['url'])){
            // Mengambil nilai 'url' dari variabel $_GET dan menyimpannya dalam variabel $url
            // Menghilangkan tanda '/' di akhir URL dengan fungsi rtrim()
            $url = rtrim($_GET['url']);

            // Membersihkan URL dari karakter-karakter yang tidak valid dengan fungsi filter_var()
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Memecah URL berdasarkan tanda '/' dengan fungsi explode()
            $url = explode('/', $url);

            // Mengembalikan nilai $url
            return $url;
        }
    }
}
