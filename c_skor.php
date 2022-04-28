<?php
    
    include_once("m_skor.php");

    if (isset($_POST['submit'])) {
        $club1 = $_POST['club1'];
        $skor1 = $_POST['skor1'];
        $club2 = $_POST['club2'];
        $skor2 = $_POST['skor2'];
        $control = new c_skor($club1, $skor1, $club2, $skor2);
        $control->insert();
        echo "<script>location.href = 'skor.php'</script>";
    }

    class c_skor{
        public $model;
        public function __construct($club1, $skor1, $club2, $skor2){
        $this->model = new m_skor($club1, $skor1, $club2, $skor2);
        }
        public function insert() {
            $this->model->setSkor();
            Include 'skor.php';
        }
    }