<?php

class Controller{
    // Membuat method view dengan parameter view dan data defaultnya adalah array kosong siapa tahu tidak ada data yang dikirimkan
    public function view($view, $data = []){
        // Memeriksa apakah file view yang dimaksud ada di dalam folder views
        // $view yang dimaksud adalah "home/index" yang berada pada file app\controllers\Home.php pada baris ke-8
        require_once '../app/views/' . $view . '.php';
    }
}
