<?php
    require "koneksiMVC.php";
    class m_jadwal {
        private $tanggal;
        private $club1;
        private $club2;
        public function __construct($tanggal, $club1, $club2){
            $this->tanggal = $tanggal;
            $this->club1 = $club1;
            $this->club2 = $club2;
        }
        public function setJadwal(){
            global $mysqli;
            $mysqli->query("INSERT INTO jadwal(tanggal, club1, club2) VALUES ('$this->tanggal', '$this->club1', '$this->club2')");
        }
        public function getJadwal(){
            global $mysqli;
            $rs = $mysqli->query("SELECT * FROM jadwal");
            $rows = array();
            while ($row = $rs->fetch_assoc()) {
                $rows[] = $row;
            }
            $this->hasil = $rows;
            return $this->hasil;
        }
}