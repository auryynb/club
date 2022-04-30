<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" media="screen" href="assets/css/style.css" />
<title>Liga PW</title>
</head>
<body class="bodybg">

<?php
 include "koneksiMVC.php";
 $rs = $mysqli->query("SELECT nama,poin,totalmenang,totalkalah,totalseri,totalgol,totalkebobol,selisihgol FROM club ORDER BY poin DESC, selisihgol DESC, totalgol DESC");
?>

<style>
    table, th, td {
      padding: 15px;
      border: 1px solid;

    }
</style>

<center>
  <br>
  <h1 class="judul">Peringkat Klasemen</h1>
  <br>
  <table class = "tabel">
    <tr>
      <th>Rank</th>
      <th>Club</th>
      <th>Poin</th>
      <th>Total Menang</th>
      <th>Total Kalah</th>
      <th>Total Seri</th>
      <th>Total Gol</th>
      <th>Total Kebobol</th>
      <th>Selisih Gol</th>
    </tr>
  <tbody>
    <?php
        $i = 1;
        while ($club = mysqli_fetch_array($rs)){
        echo "<tr><td>$i</td>
        <td>$club[nama]</td>
        <td>$club[poin]</td>
        <td>$club[totalmenang]</td>
        <td>$club[totalkalah]</td>
        <td>$club[totalseri]</td>
        <td>$club[totalgol]</td>
        <td>$club[totalkebobol]</td>
        <td>$club[selisihgol]</td>      
        </tr>";
        $i += 1;
        }
        echo '</table>';
        
    ?>
  </tbody>
  </table>
</center>
<br><br>
<center><a href="index.php"><input type="button" value="Beranda"></a></center>

</body>
</html> 