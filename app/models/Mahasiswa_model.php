<?php
class Mahasiswa_model{
    // Sebuah array yang berisi array asosiatif dengan key nama, nim, email, dan jurusan
    private $mhs = [
        [
            "nama" => "Muhammad Razin Syakib",
            "nim" => "20500043",
            "email" => "muhammadrazin14@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Kanda Sorata",
            "nim" => "12500043",
            "email" => "soratakanda@gmail.com",
            "jurusan" => "Game Development"
        ],
        [
            "nama" => "Ryuunosuke Akasaka",
            "nim" => "12500050",
            "email" => "ryu@gmail.com",
            "jurusan" => "Cyber Security"
        ],
    ];

    // method untuk mengambil data mahasiswa
    public function getAllMahasiswa(){
        return $this->mhs;
    }
}