<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Galery
      <small>Pengaturan Galery</small>
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
        <div class="box-title"><h4>Manage Galery</h4></div>
        <br>
        <button type="submit" name="submit" class="btn btn-success" onclick="window.location='manage-galery'">Tambah Galery</button>
      </div>

        <div class="box-body table-responsive">
       <table id="example1" class="table table-bordered table-striped">
          <thead>
           <th width="5%">No</th>
           <th width="15%">Judul Galery</th>
           <th width="15%">Deskripsi</th>
           <th width="15%">Gambar</th>
           <th width="15%">Aksi</th>
         </thead>
         <?php
         $result = $koneksi->query("SELECT * FROM data_galery ORDER BY id DESC");

         $no=0; foreach ($result as $data): $no++         
         ?>
         <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $data['judul']; ?></td>
          <td><?php echo $data['deskripsi']; ?></td>
          <td><img class="img-responsive" src="../galery/<?php echo $data['gambar'];?>" width="300" height="100"></td>
          <td><a href="manage-galeryhapus.php?id=<?php echo $data['id'];?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-sm"">Hapus</a>
            <a href="manage-galeryedit.php?id=<?php echo $data['id'];?>" class="btn btn-primary btn-sm"">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>


</div> <!-- content-wrapper -->
</section> <!-- content -->


<?php
include 'global_footer.php';
?>