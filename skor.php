
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" media="screen" href="assets/css/style.css" />
<title>Liga PW</title>
</head>
<body class="bodybg">

<form action="c_skor.php" method="POST">
	<center>
		<h1 class= "judul"> Form Tambah Skor</h1>
		<br><br>
		<pre class="tab4">Nama Club 1             : <input type="text" name="club1" required /></pre><br><br>
		<pre class="tab4">Skor Club 1             : <input type="number" name="skor1" required /></pre><br><br>
		<pre class="tab4">Nama Club 2             : <input type="text" name="club2" required /></pre><br><br>
		<pre class="tab4">Skor Club 2             : <input type="number" name="skor2" required /></pre><br><br>

        <input type="submit" value="Tambah" name="submit" /><br><br>
	</center>
</form>
<br>
<center><a href="index.php"><input type="button" value="Beranda"></a></center>

</body>
</html>