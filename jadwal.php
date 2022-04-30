<?php
 include "koneksiMVC.php";
 $rs = $mysqli->query("SELECT * FROM jadwal");
?>

<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" media="screen" href="assets/css/style.css" />
<title>Liga PW</title>
</head>	
<body class="bodybg">
		<form action="c_jadwal.php" method="POST">
			<center>
				<h1 class= "judul">Form Tambah</h1>
				<h1 class= "judul1">Jadwal Pertandingan</h1>
				<br><br><br><br>
				<pre class="tab4">Tanggal    : <input type="date" name="tanggal" required /></pre><br><br><br>
				<pre class="tab4">Club 1          : <input type="text" name="club1" required /></pre><br><br>
				<pre class="tab4">Club 2          : <input type="text" name="club2" required /></pre><br>

				<br><br><input type="submit" value="Tambah" name="submit" />
			</center>
		</form>
		<br>
		<center><a href="index.php"><input type="button" value="Beranda"></a></center>
		<br><br><br>
		<center>
			<table class = "tabel" border="2" cellpadding="5" cellspacing="1">
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
