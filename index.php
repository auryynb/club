<?php
//include "c_jadwal.php";
//$control = new c_jadwal('selasa', '2002-02-13', 'chelsea', 'barca');
//$control->insert();

include "c_skor.php";
$control = new c_skor('chelsea', 3, 'barcelona', 4);
        $control->insert();