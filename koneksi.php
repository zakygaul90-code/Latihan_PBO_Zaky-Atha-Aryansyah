<?php
class Database {
    private $host     = "localhost";
    private $username = "root";
    private $password = "";
    // Menggunakan nama database sesuai dengan penamaan yang kamu gunakan sebelumnya
    private $database = "db_latihan_pbo_ti-1c_zakyathaa"; 
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }
}
?>