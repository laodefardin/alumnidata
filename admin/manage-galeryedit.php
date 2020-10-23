<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Galery Gambar
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
        <div class="box-title"><h4>Edit Galery Gambar</h4></div>
      </div>

      <div class="box-body">
        <?php
        $query = $koneksi->query("SELECT * FROM data_galery WHERE id = '$_GET[id]'");
        foreach ($query as $data) {
          ?>
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <table id="example1" class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <td><label>Judul Gambar</label></td>
                  <td><input class="form-control" type="input" name="judul" value="<?php echo $data['judul']; ?>" id="judul"></td>
                </tr>
                <tr>
                  <td><label>Deskripsi Gambar</label></td>
                  <td><input class="form-control" type="input" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" id="deskripsi"></td>
                </tr>  
                <tr>
                  <td><label>Gambar</label></td>
                  <td>
                    <input class="form-control" value="<?php echo $data['gambar'];?>" type="file" name="foto" id="foto">&nbsp; &nbsp;JPEG/JPG</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input class="btn btn-primary" id="submit" type="submit" name="add" value="Update">
                      <input class="btn btn-danger" id="reset" type="reset" value="Batal" onclick="self.history.back()">
                    </td>
                  </tr>
                </tbody></table>
              </form>
              <?php } ?>
            </div>
          </div>
        </div> <!-- content-wrapper -->
      </section> <!-- content -->
      <?php
      include 'global_footer.php';
      ?>

      <?php
      if (isset($_POST['add'])){
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        $img = $_FILES['foto']['name']; 
        $img = $_FILES['foto']['tmp_name'];
        if(!empty($img)){
          $img = $_FILES['foto']['name'];
          $tmp = $_FILES['foto']['tmp_name'];

          $gambar_baru = date('dmYHis').$img;
          $path = "../galery/".$gambar_baru;

          if(move_uploaded_file($tmp, $path)){
          $query = $koneksi->query("SELECT * FROM data_galery WHERE id = '$_GET[id]'");
          $data = mysqli_fetch_array($query);

          if(is_file("../galery/".$data['gambar']))
          unlink("../galery/".$data['gambar']);

          $update = "UPDATE data_galery SET judul='".$judul."', deskripsi='".$deskripsi."', gambar= '".$gambar_baru."' WHERE id='".$_GET['id']."'";
          $proses = $koneksi->query($update);
          if ($proses){
            $_SESSION['pesan'] = 'Update Gambar Berhasil di Tambah';
          }
          echo "<script>window.location='galerymanage';</script>";
        }
        } else {
          $update = "UPDATE data_galery SET judul = '".$judul."', deskripsi='".$deskripsi."' WHERE id='".$_GET['id']."'";

          $proses = $koneksi->query($update);
          if ($proses){
            $_SESSION['pesan'] = 'Update Gambar Berhasil di Tambah';
          }
          echo "<script>window.location='galerymanage';</script>";
        } 
      }
      
      ?>