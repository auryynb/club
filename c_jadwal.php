<?php
    
    include_once("m_jadwal.php");

    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $club1 = $_POST['club1'];
        $club2 = $_POST['club2'];
        $control = new c_jadwal($tanggal, $club1, $club2);
        $control->insert();
        echo "<script>location.href = 'jadwal.php'</script>";
    }
    class c_jadwal{
        public $model;
        public function __construct($tanggal, $club1, $club2){
        $this->model = new m_jadwal($tanggal, $club1, $club2);
        }
        public function insert() {
            $this->model->setJadwal();
            Include 'jadwal.php';
        }
        public function invoke(){
            $jadwal = $this->model->getJadwal();
            include 'jadwal.php';
        }
    }