<?php
 include "koneksiMVC.php";
 $rs = $mysqli->query("SELECT * FROM jadwal");
?>

<html>
	<head></head>
	<body>
		<form action="c_jadwal.php" method="POST">
			<center>
				<h1>Form Tambah Jadwal Pertandingan</h1>
				Tanggal   : <input type="date" name="tanggal" required /><br><br>
				Club 1   : <input type="text" name="club1" required /><br><br>
				Club 2  : <input type="text" name="club2" required /><br><br>
				<br><br><input type="submit" value="Tambah" name="submit" />
			</center>
		</form>
		<center><a href="index.php"><input type="button" value="Beranda"></a></center>
		<br><br><br>
		<center>
			<table border="2" cellpadding="5" cellspacing="1">
			<tbody align="center">
			<tr class="tablehead">
				<td>Tanggal</td>
				<td>Club 1</td>
				<td>Club 2</td>
				<td>Skor 1</td>
				<td>Skor 2</td>
			</tr>
			</tbody>
			<?php
				while ($jadwal = mysqli_fetch_array($rs))
				echo "<tr><td>$jadwal[tanggal]</td>
				<td>$jadwal[club1]</td>
				<td>$jadwal[club2]</td>
				<td>$jadwal[skor1]</td>
				<td>$jadwal[skor2]</td></tr>";
				echo '</table>';
			?>
		</center>
	</body>
</html>
