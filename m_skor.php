<?php
    require "koneksiMVC.php";
    class m_skor {
        private $club1;
        private $skor1;
        private $club2;
        private $skor2;
        public function __construct($club1, $skor1, $club2, $skor2){
            $this->club1 = $club1;
            $this->skor1 = $skor1;
            $this->club2 = $club2;
            $this->skor2 = $skor2;
        }
        public function setSkor(){
            global $mysqli;
            $mysqli->query("UPDATE jadwal set skor1='$this->skor1', skor2='$this->skor2' WHERE club1 ='$this->club1' and club2 = '$this->club2'");
            
            if($this->skor1>$this->skor2){ //JIKA POIN>POIN2, MAKA KLUB 1 MENANG
                $mysqli->query("UPDATE club set poin = poin+3, totalmenang = totalmenang+1,totalgol=totalgol+'$this->skor1', totalkebobol=totalkebobol+'$this->skor2' where nama = '$this->club1'");
                $mysqli->query("UPDATE club set totalkalah = totalkalah+1, totalgol=totalgol+'$this->skor2',totalkebobol = totalkebobol + '$this->skor1',selisihgol = selisihgol + ('$this->skor2'-'$this->skor2') where nama = '$this->club2'");
            }elseif($this->skor2>$this->skor1){ //SEBALIKNYA
                $mysqli->query("UPDATE club set poin = poin+3, totalmenang = totalmenang+1,totalgol=totalgol+'$this->skor2', totalkebobol=totalkebobol+'$this->skor1' where nama = '$this->club2'");
                $mysqli->query("UPDATE club set totalkalah = totalkalah+1, totalgol=totalgol+'$this->skor1',totalkebobol = totalkebobol + '$this->skor2',selisihgol = selisihgol + ('$this->skor1'-'$this->skor2') where nama = '$this->club1'");
            }
            else{ //JIKA SERI
                $mysqli->query("UPDATE club set poin = poin+1,totalseri = totalseri+1,totalgol=totalgol+'$this->skor1', totalkebobol=totalkebobol+'$this->skor2',selisihgol = selisihgol + ('$this->skor1'-'$this->skor2') where nama = '$this->club1'");
                $mysqli->query("UPDATE club set poin = poin+1, totalseri = totalseri+1, totalgol=totalgol+'$this->skor2',totalkebobol = totalkebobol + '$this->skor1',selisihgol = selisihgol + ('$this->skor2'-'$this->skor1') where nama = '$this->club2'");
            }
}
    }