<?php
class Mahasiswa_model{
    private $dbh; // database handler
    private $stmt; // statement

    // koneksi ke database
    public function __construct(){
        // data source name, untuk mengidentifikasi alamat server database
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        // coba koneksi ke database dengan blok try catch
        try{
            // berfungsi untuk menghubungkan ke database dengan PDO (PHP Data Object), berisi parameter dsn, username, dan password
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            // jika koneksi gagal, maka akan ditampilkan pesan errornya
            die($e->getMessage());
        }
    }

    // method untuk mengambil data mahasiswa
    public function getAllMahasiswa(){
        // query untuk mengambil semua data mahasiswa
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // eksekusi query
        $this->stmt->execute();
        // fetchAll untuk mengambil semua data, dan diatur agar mengembalikan data dalam bentuk array assosiatif
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}