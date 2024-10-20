<?php 
    class Database{
        //properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php";
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);
                // pengujian koneksi
                // if($this->connect->connect_error){
                //     die ("Koneksi gagal : " . $this->connect->connect_error);
                // }
                // echo "Koneksi Berhasil";
        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users" );
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function tambahData($nama, $alamat, $nohp){
            mysqli_query($this->connect, "INSERT INTO tb_users VALUE (NULL, '$nama', '$alamat', '$nohp')" );
        }

        function editData($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users WHERE id=$id");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama, $alamat, $nohp){
            mysqli_query($this->connect, "UPDATE `tb_users` SET `nama` = '$nama ', `alamat` = '$alamat ', `nohp` = '$nohp' WHERE `tb_users`.`id` = '$id'");
        }

        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM tb_users WHERE `tb_users`.`id` = '$id'");
        }

        public function detail($id) {
            // Query untuk mengambil data berdasarkan ID
            $sql = "SELECT * FROM tb_users WHERE id = '$id'"; // Ganti "users" dengan nama tabel Anda
            $query = $this->connect->query($sql);
            return $query->fetch_assoc(); // Mengembalikan satu baris data
        }


    }

?>