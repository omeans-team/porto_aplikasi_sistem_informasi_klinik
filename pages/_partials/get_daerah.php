<?php 
 include('../../assets/config/config.php'); 
 
$data = $_POST['data'];
$id = $_POST['id'];
 
$n=strlen($id);
$m=($n==2?5:($n==5?8:13));
// $wil=($n==2?'Kota/Kab':($n==5?'Kecamatan':'Desa/Kelurahan'));
?>
<?php 
if($data == "kabupaten"){
	?>
	Kabupaten/Kota
	<select id="form_kab">
		<option value="">Pilih Kabupaten/Kota</option>
		<?php 
		$daerah = mysqli_query($db,"SELECT kode,nama FROM wilayah_2020 WHERE LEFT(kode,'$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");
 
		while($d = mysqli_fetch_array($daerah)){
			?>
			<option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
			<?php 
		}
		?>
	</select>
 
	<?php 
}else if($data == "kecamatan"){ 
	?>
	<select id="form_kec">
		<option value="">Pilih Kecamatan</option>
		<?php 
		$daerah = mysqli_query($db,"SELECT kode,nama FROM wilayah_2020 WHERE LEFT(kode,'$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");
 
		while($d = mysqli_fetch_array($daerah)){
			?>
			<option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
			<?php 
		}
		?>
	</select>
 
	<?php 
}else if($data == "desa"){ 
	?>
 
	<select id="form_kel">
		<option value="">Pilih Desa</option>
		<?php 
		$daerah =mysqli_query($db,"SELECT kode,nama FROM wilayah_2020 WHERE LEFT(kode,'$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");
		while($d = mysqli_fetch_array($daerah)){
			?>
			<option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
			<?php 
		}
		?>
	</select>
 
	<?php 
 
}
?>