<?php

// Mendefinisikan class About
// Class About ini merupakan child dari class Controller
class About extends Controller{
    // Membuat method default dengan parameter nama dan pekerjaan
    public function index($nama = 'Razin', $pekerjaan = 'Mahasiswa', $umur = 21){
        $this->view('about/index');
    }

    // Membuat method page
    public function page(){
        $this->view('about/page');
    }
}