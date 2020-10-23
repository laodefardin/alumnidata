<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Lowongan Kerja
      <small>Pengaturan Lowongan Kerja</small>
    </h1>
  </section>

  <section class="content">
    <?php 
    //menampilkan pesan jika ada pesan
    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
      // echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';

      echo '<div class="pesan">
      <div class="alert alert-success" role="alert">'.$_SESSION['pesan'].'</div></div>';
      // echo '<div class="alert alert-success fade in">
      // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
      // </div>';
    }
    //mengatur session pesan menjadi kosong
    $_SESSION['pesan'] = '';
    ?>
    <div class="box box-warning">
      <div class="box-header">
        <div class="box-title"><h4>Edit Lowongan Kerja</h4></div>
      </div>
      <?php
      $query = $koneksi->query("SELECT * FROM data_loker WHERE id_loker = '$_GET[id]'");
      foreach ($query as $data) { 
        $kategori = $data["id_loker"];
        ?>
        <div class="box-body">
         <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <table class="table table-bordered table-striped">
            <tbody><tr>
              <td width="20%">Judul Lowongan Kerja</td>
              <td><input class="form-control" name="judul" type="text" size="55" value="<?php echo $data['judul'];?>" required></td>
            </tr>
          <tr>
            <td>Isi Lowongan Kerja</td>
            <td><textarea class="textarea" name="isi" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $data['isi'];?></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><input class="btn btn-success" type="submit" name="submit" value="Update">
              <input class="btn btn-primary" type="button" value="Kembali" onclick="self.history.back()">
            </td> 
          </tr>
        </tbody>
      </table>
    </form>
    <?php } ?>
  </div>
</div>
</div> <!-- content-wrapper -->
</section> <!-- content -->
<?php      include 'global_footer.php';  ?>

<?php
$nama = $_SESSION['nama_lengkap'];
$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);
$tgl = date('Y-m-d');

if (isset($_POST['submit'])){
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  $update = "UPDATE data_loker SET judul='$judul', isi='$isi', tanggal='$currentDate', tgl='$tgl' WHERE id_loker='".$_GET['id']."'";
    $proses = $koneksi->query($update);
    if ($proses){
      $_SESSION['pesan'] = 'Update Data Berhasil';
    }
    echo "<script>window.location='lowongan-kerja-manage';</script>";  
}
?>