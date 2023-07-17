<?php

// Mendefinisikan class Home 
// Class Home ini merupakan child dari class Controller
class Home extends Controller{
    public function index(){
        // Memanggil method view yang ada di dalam class Controller dengan parameter 'home/index'
        $this->view('home/index');
    }
}