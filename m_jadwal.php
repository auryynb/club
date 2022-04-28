<?php
    require "koneksiMVC.php";
    class m_jadwal {
        private $hari;
        private $tanggal;
        private $club1;
        private $club2;
        public function __construct($hari, $tanggal, $club1, $club2){
            $this->hari = $hari;
            $this->tanggal = $tanggal;
            $this->club1 = $club1;
            $this->club2 = $club2;
        }
        public function setJadwal(){
            global $mysqli;
            $mysqli->query("INSERT INTO jadwal(hari, tanggal, club1, club2) VALUES ('$this->hari', '$this->tanggal', '$this->club1', '$this->club2')");
        }
}