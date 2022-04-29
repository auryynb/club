<?php
 include "koneksiMVC.php";
 $rs = $mysqli->query("SELECT * FROM club");
?>

<form action="c_tambah.php" method="POST">
	<center>
		<h1>Form Tambah Club</h1>
        Nama Club   : <input type="text" name="nama" required /><br><br>
		Jumlah Pemain   : <input type="number" name="jumlah" required /><br><br>
		Manager   : <input type="text" name="manager" required /><br><br>
        Pelatih  : <input type="text" name="pelatih" required /><br><br>
        Asal Club   : <input type="text" name="asal" required="" />
      	<br><br><input type="submit" value="Tambah" name="submit" />
	</center>
</form>

<center><a href="index.php"><input type="button" value="Beranda"></a></center>

<br><br>
<center>
	<table border="2" cellpadding="5" cellspacing="1">
		<tbody align="center">
		<tr class="tablehead">
			<td>Nama</td>
			<td>Jumlah Pemain</td>
			<td>Manager</td>
			<td>Pelatih</td>
			<td>Asal Club</td>
			<td>Poin</td>
			<td>Total Menang</td>
			<td>Total Kalah</td>
			<td>Total Seri</td>
			<td>Total Gol</td>
			<td>Total Kebobol</td>
			<td>Selisih Gol</td>
		</tr>
		</tbody>
		<?php
			while ($club = mysqli_fetch_array($rs))
				echo "<tr><td>$club[nama]</td>
				<td>$club[jumlah]</td>
				<td>$club[manager]</td>
				<td>$club[pelatih]</td>
				<td>$club[asal]</td>
				<td>$club[poin]</td>
				<td>$club[totalmenang]</td>
				<td>$club[totalkalah]</td>
				<td>$club[totalseri]</td>
				<td>$club[totalgol]</td>
				<td>$club[totalkebobol]</td>
				<td>$club[selisihgol]</td></tr>";
				echo '</table>';
		?>
</center>