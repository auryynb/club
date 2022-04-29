<?php
        require "koneksiMVC.php";
        class m_peringkat{
            private $nama;
            private $poin;
            private $totalmenang;
            private $totalkalah;
            private $totalseri;
            private $totalgol;
            private $totalkebobol;
            private $selisihgol;

            public function __construct($nama, $poin, $totalmenang, $totalkalah, $totalseri, $totalgol, $totalkebobol, $selisihgol){
                $this->nama = $nama;
                $this->poin = $poin;
                $this->totalmenang = $totalmenang;
                $this->totalkalah = $totalkalah;
                $this->totalseri = $totalseri;
                $this->totalgol = $totalgol;
                $this->totalkebobol = $totalkebobol;
                $this->selisihgol = $selisihgol;
            }

            public function cetakPeringkat(){
                global $mysqli;
                $rs = $mysqli->query("SELECT nama,poin,totalmenang,totalkalah,totalseri,totalgol,totalkebobol,selisihgol FROM club ORDER BY poin DESC, selisihgol DESC, totalgol DESC");
                $rows = array();
                while ($row = $rs->fetch_assoc()) {
                    $rows[] = $row;
                }
                $this->tabel = $rows;
                return $this->tabel;
            }

         
            
    }
