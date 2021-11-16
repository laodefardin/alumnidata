<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Slide
            <small>Pengaturan Slide</small>
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
                <div class="box-title">
                    <h4>Manage Slide</h4>
                </div>
            </div>

            <div class="box-body">
                <?php
                                $id = $_GET['id'];
                                $query = $koneksi->query("SELECT * FROM data_slide WHERE id_slide = '$_GET[id]' ");
                                if(is_array($query) || is_object($query)){
                                foreach ($query as $data) {
                                ?>
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <table id="example1" class="table table-bordered table-striped">
                        <tbody>

                            <tr>
                                <td><label>Gambar Slide</label></td>
                                <br>
                                <td>
                                    <img src="../slide/<?php echo $data['gambar'];?>" width="300" height="100">
                                    <br>
                                    <input class="form-control" type="file" name="foto" id="foto"> &nbsp; &nbsp;JPEG/JPG
                                </td>
                            </tr>
                            <tr>
                                <td><label>Aktif Slide</label></td>
                                <td>
                                    <select name="aktif" id="aktif" class="form-control">
                                        <option>&lt;-Pilih Aktif-&gt;</option>
                                        <option value="0" <?= $data['active'] == '0' ? 'selected' : ' ' ?>>0 Gambar
                                            Akhir</option>
                                        <option value="1" <?= $data['active'] == '1' ? 'selected' : ' ' ?>>1 Gambar Awal
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="btn btn-primary" id="submit" type="submit" name="add" value="Ubah">
                                    <input class="btn btn-danger" id="reset" type="reset" value="Batal"
                                        onclick="self.history.back()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <?php }} ?>
            </div>
        </div>
</div> <!-- content-wrapper -->
</section> <!-- content -->
<?php
include 'global_footer.php';
?>

<?php
if (isset($_POST['add'])){
    $aktif = $_POST['aktif'];

    $fotokegiatan = $_FILES['foto']['name'];

    if(empty($fotokegiatan)){
        $update = "UPDATE data_slide SET active='".$aktif."' WHERE id_slide = '".$id."' ";

        $sql = mysqli_query($koneksi, $update);
        $_SESSION['pesan'] = 'Ubah';
        echo "<script> document.location.href='./slidemanage';</script>";
    }else{
        $query = $koneksi->query("SELECT * FROM data_slide WHERE id_slide = '$id' ");
        $data = mysqli_fetch_array($query);
        $lokasi = $data['gambar'];
        $hapus_gambar = "../slide/".$lokasi;
        unlink($hapus_gambar);

        $foto = date('dYHiS').$fotokegiatan;
        move_uploaded_file($_FILES['foto']['tmp_name'], '../slide/'.$foto);

        $update = "UPDATE data_slide SET  gambar='".$foto."', active='".$aktif."' WHERE id_slide = '".$id."' ";
        
        $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
        if ($sql){
        $_SESSION['pesan'] = 'Ubah';
        echo "<script> document.location.href='./slidemanage';</script>";
        exit;
    }
    }
}
?>