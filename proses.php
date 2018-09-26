<body background="gw.jpg">
<h1><font style="calibri" size="5"><center>SELAMAT DATANG</h1><center></font>
<hr>


<form action="" method="POST" enctype="multipart/form-data">
	<table width="770" border="0" cellpadding="0" cellspacing="2" >
		<tr>
 <td height="50" colspan="3" width="20px">Gambar <input type="file" name="gambar" width="40px"></td>
</tr>
<tr ><td height="30"></td></tr>
<tr>
 <td height="52" colspan="3" bgcolor="#ff6699"><center>FORM DATA</center>
 </td></tr>
 <tr>
 	<td height ="20" width="2px" colspan="2" bgcolor="#7FFFD4">Hobi
  <input type="checkbox" name="hobi[]" value="Otomotif">Otomotif
 <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
 <input type="checkbox" name="hobi[]" value="Seni">Seni
</td></tr>
<tr>
	<td height="42" colspan="3" bgcolor="#ff6699"> Film yang disukai
	 <input type="checkbox" name="film[]" value="Horor">Horor
	  <input type="checkbox" name="film[]" value="Action">Action
	   <input type="checkbox" name="film[]" value="Anime">Anime
	    <input type="checkbox" name="film[]" value="thriller">Thriller
	     <input type="checkbox" name="film[]" value="animasi">Animasi
	 </td>
	</tr>
	<tr>
		<td height="42" colspan="2" bgcolor="#7FFFD4">Tempat wisata tujuan traveling
			<input type="checkbox" name="wisata[]" value="Bali">Bali
			<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat
			<input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan
			<input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung
			<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo
		</td></tr>

<tr>
<td height="40" colspan="2" bgcolor="#ff6699">
 <center><input type="submit" name="submit" value="simpan">
  <input type="submit" name="submit" value="hapus"></center></td>
</tr>
</form>
</body>
<?php
 if (isset($_POST['submit'])) {
  $gambar = $_FILES['gambar']['name'];
  $hb = $_POST['hobi'];
  $film =$_POST['film'];
  $wisataa=$_POST['wisata'];
  echo "<tr><td></td><tr><tr><td height='40'><center><img src='$gambar',50> </center></td><tr>";
  foreach ($hb as $hb) {
  	# code...
  
  echo "<tr><td ></td></tr><tr> <td><center>Hobi : $hb<center></td></tr>";
  echo "<br>";
}
  
  foreach ($film as $film) {
  	# code...
 
  
  echo "<tr><td ></td></tr><tr> <td><center>Film  : $film</center></td></tr>";
  echo "<br>";
}
  foreach ($wisataa as $wisataa) {
 
  
  echo "<tr><td ></td></tr><tr> <td><center>Wisata : $wisataa</center></td></tr>";
  echo "<br>";
}}



?>