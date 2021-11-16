<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Tentang JPTE UNM
      <small>Pengaturan Tentang JPTE UNM</small>
    </h1>
    <P></P>
    <div class="callout callout-warning" style="margin-bottom: 0!important;">
      <h4><i class="fa fa-warning"></i> Catatan:</h4>
      Pastikan Ukuran Foto yang diupload berukuran Width=2,8cm dan Height=3,8cm
    </div>
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
      <div class="box-body">
        <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-5">
          <div class="box-header with-border">
            <h3 class="box-title">Ketua Jurusan</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-6">
            <?php
            $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
            foreach ($profil as $data) { 
              ?>
              <?php 
              $foto = $data["foto"];
              if($foto===''){?>
                <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
              <?php } else {?>
                <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
              <?php }; ?>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-6">
              <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="input-group">
                  <input type="text" name="nama_dosen" placeholder="Ketua Jurusan" value="<?php echo $data['nama']; ?>" class="form-control">
                  <span class="input-group-btn">
                    <button type="nama1" name="nama1" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
                  </span>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
                  <span class="input-group-btn">
                    <button type="nip1" name="nip1" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
                  </span>
                </div>
                <br>
                <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
                <button class="btn btn-primary btn-sm" name="foto1" type="foto1" >Upload</button>
              </form>
            </div>
          </div>
          <?php
        }?>


        <div class="col-sm-4 col-md-4 col-lg-5">
          <div class="box-header with-border">
            <h3 class="box-title">Sekretaris Jurusan</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-6">
            <?php
            $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '2'");
            foreach ($profil as $data) { 
              ?>
              <?php 
              $foto = $data["foto"];
              if($foto===''){?>
                <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
              <?php } else {?>
                <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
              <?php }; ?>

            </div>
            <div class="col-sm-5 col-md-5 col-lg-6">
              <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="input-group">
                 <input type="text" name="nama_dosen" placeholder="Sekretaris Jurusan" value="<?php echo $data['nama']; ?>" class="form-control">
                 <span class="input-group-btn">
                   <button type="nama2" name="nama2" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
                 </span>
               </div>
               <br>
               <div class="input-group">
                <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
                <span class="input-group-btn">
                  <button type="nip2" name="nip2" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
                </span>
              </div>
              <br>
              <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
              <button class="btn btn-primary btn-sm" name="foto2" type="foto2" >Upload</button>
            </form>
          </div>
        </div>
        <?php
      }?>
      </div>

      <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-5">
        <div class="box-header with-border">
          <h3 class="box-title">Ketua Prodi PTIK S1</h3>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-6">
          <?php
          $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '3'");
          foreach ($profil as $data) { 
            ?>
            <?php 
            $foto = $data["foto"];
            if($foto===''){?>
              <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
            <?php } else {?>
              <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
            <?php }; ?>

          </div>
          <div class="col-sm-5 col-md-5 col-lg-6">
            <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="input-group">
               <input type="text" name="nama_dosen" placeholder="Ketua Prodi PTIK S1" value="<?php echo $data['nama']; ?>" class="form-control">
               <span class="input-group-btn">
                 <button type="nama3" name="nama3" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
               </span>
             </div>
             <br>
             <div class="input-group">
              <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
              <span class="input-group-btn">
                <button type="nip3" name="nip3" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
              </span>
            </div>
            <br>
            <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
            <button class="btn btn-primary btn-sm" name="foto3" type="foto3" >Upload</button>
          </form>
        </div>
      </div>
      <?php
    }?>

    <div class="col-sm-4 col-md-4 col-lg-5">
      <div class="box-header with-border">
        <h3 class="box-title">Ketua Prodi Elektro S1</h3>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-6">
       <?php
       $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '4'");
       foreach ($profil as $data) { 
        ?>
        <?php 
        $foto = $data["foto"];
        if($foto===''){?>
          <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
        <?php } else {?>
          <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
        <?php }; ?>

      </div>
      <div class="col-sm-5 col-md-5 col-lg-6">
        <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="input-group">
            <input type="text" name="nama_dosen" placeholder="KProdi Elektro S1" value="<?php echo $data['nama']; ?>" class="form-control">
            <span class="input-group-btn">
             <button type="nama4" name="nama4" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
           </span>
         </div>
         <br>
         <div class="input-group">
          <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
          <span class="input-group-btn">
            <button type="nip4" name="nip4" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
          </span>
        </div>      
        <br>     
        <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
        <button class="btn btn-primary btn-sm" name="foto4" type="foto4" >Upload</button>
      </form>
    </div>
  </div>
  <?php
}?>
</div>

<div class="row">
<div class="col-sm-4 col-md-4 col-lg-5">
  <div class="box-header with-border">
    <h3 class="box-title">Ketua Prodi Elektro D3</h3>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-6">
    <?php
    $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '5'");
    foreach ($profil as $data) { 
      ?>
      <?php 
      $foto = $data["foto"];
      if($foto===''){?>
        <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
      <?php } else {?>
        <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
      <?php }; ?>

    </div>
    <div class="col-sm-5 col-md-5 col-lg-6">
      <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="input-group">
          <input type="text" name="nama_dosen" placeholder="KProdi Elektro D3" value="<?php echo $data['nama']; ?>" class="form-control">
          <span class="input-group-btn">
           <button type="nama5" name="nama5" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
         </span>
       </div>
       <br>
       <div class="input-group">
        <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
        <span class="input-group-btn">
          <button type="nip5" name="nip5" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
        </span>
      </div>
      <br>
      <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
      <button class="btn btn-primary btn-sm" name="foto5" type="foto5" >Upload</button>
    </form>
  </div>
</div>
<?php
}?>

<!-- <div class="col-sm-4 col-md-4 col-lg-5">
  <div class="box-header with-border">
    <h3 class="box-title">Ketua IKA FT UNM</h3>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-6">
    <?php
    $profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
    foreach ($profil as $data) { 
      ?>
      <?php 
      $foto = $data["foto"];
      if($foto===''){?>
        <img src="../foto/jurusan/anonim.jpg" class="profile-user-img img-square" style="width: 180px">
      <?php } else {?>
        <img src="../foto/jurusan/<?php echo $data['foto'];?>" class="profile-user-img img-square" style="width: 180px">
      <?php }; ?>

    </div>
    <div class="col-sm-5 col-md-5 col-lg-6">
      <form action="updatejpte.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="input-group">
          <input type="text" name="nama_dosen" placeholder="Ketua IKA FT UNM" value="<?php echo $data['nama']; ?>" class="form-control">
          <span class="input-group-btn">
           <button type="nama6" name="nama6" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
         </span>
       </div>
       <br>
       <div class="input-group">
        <input type="text" name="nip_dosen" placeholder="Masukkan Nip" value="<?php echo $data['nip_dosen']; ?>" class="form-control">
        <span class="input-group-btn">
          <button type="nip6" name="nip6" class="btn btn-danger btn-flat"><i class="fa fa-save"></i></button>
        </span>
      </div>
      <br>
      <input type="file" name="foto" id="foto" accept="image/jpeg"><br>
      <button class="btn btn-primary btn-sm" name="foto6" type="foto6" >Upload</button>
    </form>
  </div>
</div> -->
<?php
}?>
</div>

</div>
</div>
</div>

<?php
include 'global_footer.php';
?>
</div> <!-- content-wrapper -->
</section> <!-- content -->