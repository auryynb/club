
<?php
include_once("m_peringkat.php");
$control = new c_peringkat();
$control->print();
      

    class c_peringkat{
        public $model;
        public function __construct(){
        $this->model = new m_peringkat();
        }
        public function print() {
            $peringkat = $this->model->cetakPeringkat(); 
            Include 'peringkat.php';
        }
    }