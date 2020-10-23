<?php
 // membuat koneksi
include 'inc/koneksi.php';
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
} 
 //menangkap parameter yang dikirimkan dari detail.php
$id = $_GET['id'];
?>
<?php
$sql_kota = $koneksi->query("SELECT * FROM data_kota WHERE id_provinsi='$id' ORDER by nama_kota ASC");
while ( $r = $sql_kota->fetch_assoc() ){
	?>
	<option value="<?php echo $r['id_kota']; ?>"> <?php echo $r['nama_kota']; ?>
	</option>
	<?php } /* end while */                ?>
	