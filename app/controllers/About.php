<?php

// Mendefinisikan class About
// Class About ini merupakan child dari class Controller
class About extends Controller{
    // Membuat method default dengan parameter nama dan pekerjaan
    public function index($nama = 'Razin', $pekerjaan = 'Mahasiswa', $umur = 21){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('about/index', $data);
    }

    // Membuat method page
    public function page(){
        $this->view('about/page');
    }
}