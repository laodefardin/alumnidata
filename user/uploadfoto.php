<?php
include 'global_header.php';
?>
<?php
//after klik
  if (isset($_POST['upload'])){
      // Ambil data foto yang dipilih dari form
    $img = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    // // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $nama_baru = date('dmYHis').$img;
    // // Set path folder tempat menyimpan fotonya
    $path = "../foto/alumni/".$nama_baru;
    // // Proses upload
    if(move_uploaded_file($tmp, $path)){// Cek apakah gambar berhasil diupload atau tidak
       // Query untuk menampilkan data gambar berdasarkan id user yang dikirim
      $profil = $koneksi->query("SELECT * FROM alumni_profil WHERE id_user = '".$_SESSION['data_id']."'");
  $data =  mysqli_fetch_array($profil); // Ambil data dari hasil eksekusi $profil
    //  // Cek apakah file foto sebelumnya ada di folder images
    if (is_file("../foto/".$data['foto']))// Jika foto ada
  unlink("../foto/".$data['foto']);// Hapus file foto sebelumnya yang ada di folder images

      // Proses ubah data ke Database
  $update = "UPDATE alumni_profil SET foto='$nama_baru' WHERE id_user = '".$_SESSION['data_id']."'";
  mysqli_query($koneksi,$update) or die(mysqli_error());// Eksekusi/ Jalankan query dari variabel $update
  $_SESSION['pesan'] = 'Foto Berhasil Di Update';
  echo "<script type='text/javascript'>window.location = 'index.php'</script>";
  // echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
}
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

            <div class="row">      
        <div class="col-md-4">
          <h3>Upload Foto Ukuran 3x4 </h3>
          <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <input type="file" name="foto" id="foto" accept="image/jpeg"><br>

            <button class="btn btn-primary" name="upload" type="submit" >Upload</button>
          </div>
          <div class="col-md-4">
            <?php
            $profil = $koneksi->query("SELECT * FROM alumni_profil WHERE id_user = '".$_SESSION['data_id']."'");
            foreach ($profil as $data) { 
              ?>
              <?php 
              $foto = $data["foto"];
              if($foto==NULL){?>
              <img src="../foto/alumni/anonim.jpg" class="profile-user-img img-square" style="width:200px">
              <?php } else {?>
              <img src="../foto/alumni/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width:200px">
              <?php }; ?>
              <?php
            }?>
          </div>
        </div> 

    </div>
  </div>
</section>
</div>



  
<?php
include 'global_footer.php';
?>