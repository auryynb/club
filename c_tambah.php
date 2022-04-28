<?php
    
    include_once("m_tambah.php");

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $manager = $_POST['manager'];
        $pelatih = $_POST['pelatih'];
        $asal = $_POST['asal'];
        $control = new c_tambah($nama, $jumlah, $manager, $pelatih, $asal);
        $control->insert();
        echo "<script>location.href = 'tambah.php'</script>";
    }

    class c_tambah{
        public $model;
        public function __construct($nama, $jumlah, $manager, $pelatih, $asal){
        $this->model = new m_tambah($nama, $jumlah, $manager, $pelatih, $asal);
        }
        public function insert() {
            $insert = $this->model->setTambah();
            Include 'tambah.php';
        }
    }