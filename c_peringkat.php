
<?php
include_once("m_peringkat.php");

$nama = $_POST['nama'];
$poin = $_POST['poin'];
$totalmenang = $_POST['totalmenang'];
$totalkalah = $_POST['totalkalah'];
$totalseri = $_POST['totalseri'];
$totalgol = $_POST['totalgol'];
$totalkebobol = $_POST['totalkebobol'];
$selisihgol = $_POST['selisihgol'];
$control = new c_peringkat();
$control->print();

    class c_peringkat{
        public $model;
        public function __construct($nama, $poin, $totalmenang, $totalkalah, $totalseri, $totalgol, $totalkebobol, $selisihgol){
        $this->model = new m_peringkat($nama, $poin, $totalmenang, $totalkalah, $totalseri, $totalgol, $totalkebobol, $selisihgol);
        }
        public function print() {
            $peringkat = $this->model->cetakPeringkat(); 
            Include 'peringkat.php';
        }

    }