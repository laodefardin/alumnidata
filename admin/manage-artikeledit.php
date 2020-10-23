<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Berita
      <small>Pengaturan Berita</small>
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
        <div class="box-title"><h4>Edit Berita</h4></div>
      </div>
      <?php
      $query = $koneksi->query("SELECT * FROM data_artikel WHERE id_artikel = '$_GET[id]'");
      foreach ($query as $data) { 
        $kategori = $data["id_kategori"];
        ?>
        <div class="box-body">
         <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <table class="table table-bordered table-striped">
            <tbody><tr>
              <td width="20%">Judul</td>
              <td><input class="form-control" name="judul" type="text" size="55" value="<?php echo $data['judul'];?>" required></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <td>
                <select name="kategori" class="form-control select2" style="width: 100%;">
                 <option selected="selected" value="">Pilih Kategori</option>
                 <?php
                 $query    = $koneksi->query("SELECT * FROM `data_kategori`");
                 $select_kategori = "";
                 foreach ($query as $dkategori) {
                   if ($dkategori["id_kategori"]==$kategori){
                    $select_kategori .= "<option value='$dkategori[id_kategori]' selected>$dkategori[nama_kategori]</option>";
                  }else{
                    $select_kategori .= "<option value='$dkategori[id_kategori]'>$dkategori[nama_kategori]</option>";
                  }
                }
                echo $select_kategori;
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Gambar</td>
            <td><input class="form-control" type="file" name="foto" value="<?php echo $data['foto'];?>" id="file"></td>
          </tr>
          <tr>
            <td>Isi Berita</td>
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
$nama = $_SESSION['nm_lengkap'];
$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);
$date = date('Y-m-d');

if (isset($_POST['submit'])){
  $judul = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $isi = $_POST['isi'];

  $img = $_FILES['foto']['name']; 
  $img = $_FILES['foto']['tmp_name'];
  if(!empty($img)){
    $img = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $gambar_baru = date('dmYHis').$img;
    $path = "upload/".$gambar_baru;

    if(move_uploaded_file($tmp, $path)){
      $query = $koneksi->query("SELECT * FROM data_artikel WHERE id_artikel = '$_GET[id]'");
      $data = mysqli_fetch_array($query);

      if(is_file("upload/".$data['foto']))
        unlink("upload/".$data['foto']);

      $update = "UPDATE data_artikel SET judul='".$judul."', id_kategori='".$kategori."', isi='".$isi."', tanggal='".$currentDate."', date='".$date."', foto= '".$gambar_baru."' WHERE id_artikel='".$_GET['id']."'";
      $proses = $koneksi->query($update);
      if ($proses){
        $_SESSION['pesan'] = 'Update Data Berhasil';
      }
      echo "<script>window.location='artikelmanage';</script>";
    }
  } else {
    $update = "UPDATE data_artikel SET judul='".$judul."', id_kategori='".$kategori."', isi='".$isi."', tanggal='".$currentDate."', date='".$date."' WHERE id_artikel='".$_GET['id']."'";

    $proses = $koneksi->query($update);
    if ($proses){
      $_SESSION['pesan'] = 'Update Data Berhasil';
    }
    echo "<script>window.location='artikelmanage';</script>";
  } 
}

?>