<?php
        require "koneksiMVC.php";
        class m_peringkat{
        public function cetakPeringkat(){
        global $mysqli;
        $rs = $mysqli->query("SELECT nama,poin,totalmenang,totalkalah,totalseri,totalgol,totalkebobol,selisihgol FROM club");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
            $rank = $rows;
            return $rank;
    }
}