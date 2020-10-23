<?php
include 'global_header.php';
?>
<div class="content-wrapper">
 <section class="content"> 
  <div class="box box-warning">
    <div class="box-body">
      <?php 
    //menampilkan pesan jika ada pesan
      if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
        echo '<div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
        </div>';
      }
    //mengatur session pesan menjadi kosong
      $_SESSION['pesan'] = '';
      ?>
      <div class="col-md-8">
        <h2>Pesan Dan Kesan Anda</h2>
        
        <?php
        $query = $koneksi->query("SELECT * FROM data_pesankesan WHERE id_pesankesan = '$_GET[id]'");
        foreach ($query as $data) { 

          ?>

          <form method="post" action="" class="form-horizontal" enctype="multipart/from-data">
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table">
              <tr>
                <td>Pesan</td>
                <td>:</td>
                <td>
                  <textarea name="pesan" class="form-control" rows="3"> <?php echo $data['pesan']; ?> </textarea>
                </td>
                <tr>
                  <tr>
                    <td>Kesan</td>
                    <td>:</td>
                    <td>
                      <textarea name="kesan" class="form-control" rows="3"><?php echo $data['kesan']; ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><br>
                      <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                      <input class="btn btn-primary" type="button" value="Kembali" onclick="self.history.back()">
                    </td>
                    <tr>
                    </table>
                  </form></div>

                <?php } ?>
              </div>
            </div>
          </section>
        </div>

        <?php
        include 'global_footer.php';
        ?>

        <?php
        $nama = $_SESSION['nama_lengkap'];
        $currentDate = date('Y-m-d h:i:s');

        if (isset($_POST['submit'])){
          $pesan = $_POST['pesan'];
          $kesan = $_POST['kesan'];

          $query = "UPDATE data_pesankesan SET pesan='".$pesan."', kesan='".$kesan."', tanggal='".$currentDate."' WHERE id_pesankesan = '".$_GET['id']."' ";
          $proses = $koneksi->query($query) or die (mysqli_error());

          $_SESSION['pesan'] = 'Data Berhasil Ditambah';
          echo "<script>window.location='pesan-kesan-alumni';</script>";
        }
        ?>