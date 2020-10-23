<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Galery Gambar
      <small>Pengaturan Galery Gambar</small>
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
        <div class="box-title"><h4>Tambah Galery Gambar</h4></div>
      </div>

      <div class="box-body">
       <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <table id="example1" class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td><label>Judul Gambar</label></td>
              <td><input class="form-control" type="input" name="judul" id="judul"></td>
            </tr>
            <tr>
              <td><label>Deskripsi Gambar</label></td>
              <td><input class="form-control" type="input" name="deskripsi" id="deskripsi"></td>
            </tr>  
            <tr>
              <td><label>Gambar Slide</label></td>
              <td><input class="form-control" type="file" name="foto" id="foto"> &nbsp; &nbsp;JPEG/JPG</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">
                <input class="btn btn-primary" id="submit" type="submit" name="add" value="Tambah">
                <input class="btn btn-danger" id="reset" type="reset" value="Batal" onclick="self.history.back()">
              </td>
            </tr>
          </tbody></table>
        </form>
      </div>
    </div>
  </div> <!-- content-wrapper -->
</section> <!-- content -->
<?php
include 'global_footer.php';
?>

<?php
//after klik
if (isset($_POST['add'])){ 
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $img = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
    // // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $gambar_baru = date('dmYHis').$img;
    // // Set path folder tempat menyimpan fotonya
  $path = "../galery/".$gambar_baru;
    // // Proses upload
  if(move_uploaded_file($tmp, $path)){
    $query = 'insert into data_galery values("","'.$judul.'","'.$deskripsi.'","'.$gambar_baru.'")';
    $proses = $koneksi->query($query);
     echo "<script>window.location='galerymanage';</script>";
    if ($proses){
      $_SESSION['pesan'] = 'Gambar Berhasil di Tambah';
    }
   
  }
}
?>