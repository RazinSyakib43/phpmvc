<?php

class About{
    // Membuat method default dengan parameter nama dan pekerjaan
    public function index($nama = 'Razin', $pekerjaan = 'Mahasiswa'){
        // Menampilkan pesan dengan parameter nama dan pekerjaan
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan.";
    }

    // Membuat method page
    public function page(){
        echo 'about/page';
    }
}