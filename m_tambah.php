<?php
    require "koneksiMVC.php";
    class m_tambah {
        private $nama;
        private $jumlah;
        private $manager;
        private $pelatih;
        private $asal;
        public function __construct($nama, $jumlah, $manager, $pelatih, $asal){
            $this->nama = $nama;
            $this->jumlah = $jumlah;
            $this->manager = $manager;
            $this->pelatih = $pelatih;
            $this->asal = $asal;
        }
        public function setTambah(){
            global $mysqli;
            $mysqli->query("INSERT INTO club(nama, jumlah, manager, pelatih, asal) VALUES ('$this->nama', '$this->jumlah', '$this->manager', '$this->pelatih', '$this->asal')");

        }
    }

    