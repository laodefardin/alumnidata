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

    <?php
    $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user = '".$_SESSION['data_id']."'");

    foreach ($profil as $data) {          
      ?>
      <div class="box-body">
       <?php
       if (isset($_POST['submit'])){
        $nmMahasiswa = $_POST['nmMahasiswa'];
        $ipk         = $_POST['ipk'];
        $lamaStudi1  = $_POST['lamaStudi1'];
        $lamaStudi2  = $_POST['lamaStudi2'];
        $tmp_lahir   = $_POST['tempatLahir'];
        $tgl_lahir   = $_POST['tglLahir'];
        $judul       = $_POST['tgsAkhir'];
        $no_telp     = $_POST['noTelepon'];
        $noIjasah    = $_POST['noIjasah'];
        $id_agama    = $_POST['agama'];
        $email       = $_POST['email'];
        $alamat      = $_POST['alamat'];
        $id_provinsi = $_POST['provinsi'];
        $kota        = $_POST['kota'];
        $yudisium    = $_POST['predikatYudisium'];
        $statusAlumni= $_POST['statusAlumni'];   

       $update = "UPDATE alumni_profil SET 
        nama_lengkap  = '$nmMahasiswa',
        ipk           = '$ipk',
        lamaStudi1    = '$lamaStudi1',
        lamaStudi2    = '$lamaStudi2',
        tmpt_lahir    = '$tmp_lahir',
        tanggal_lahir = '$tgl_lahir',
        judul_skripsi = '$judul',
        no_telp       = '$no_telp',
        no_ijasah     = '$noIjasah',
        id_agama      = '$id_agama',
        email         = '$email',
        alamat        = '$alamat',
        id_provinsi   = '$id_provinsi',
        id_kota       = '$kota',
        statusalumni  = '$statusAlumni',
        yudisium      = '$yudisium'
        WHERE id_user = '$_SESSION[data_id]'";

        mysqli_query($koneksi, $update) or die (mysqli_error());
        $sql1 = $koneksi->query("UPDATE user SET nm_lengkap='".$nmMahasiswa."' WHERE id_user='$_SESSION[data_id]'") or die(mysqli_error());
      }

      if ($statusAlumni==='Bekerja') {?>
       <form action="simpan-data" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="row" style="margin-bottom: 15px;">
            <div class="col-lg-12">
              <h1 style="font-weight:bold;font-size:18px">Pekerjaan Sekarang</h1>
            </div>
          </div>
          <div class="row" style="margin-bottom: 15px;">
              <span class="col-lg-2">Rentang Selesai Hingga Bekerja</span>
              <div class="col-lg-4">
                <select class="form-control" name="rentangjarak" id="rentangJarak">
                  <option value=""> - Pilih Lama Bekerja Dulu - </option>
                  <option value="< 1 Bulan" <?php if($data['lama_bekerja'] == '< 1 Bulan'){echo 'selected';} ?>> < 1 Bulan </option>
                  <option value="1 Bulan - 5 Bulan" <?php if($data['lama_bekerja'] == '1 Bulan - 5 Bulan'){echo 'selected';} ?>>1 Bulan - 5 Bulan</option>
                  <option value="5 Bulan - 10 Bulan" <?php if($data['lama_bekerja'] == '5 Bulan - 10 Bulan'){echo 'selected';} ?>>5 Bulan - 10 Bulan</option>
                  <option value="> 1 Tahun" <?php if($data['lama_bekerja'] == '> 1 Tahun'){echo 'selected';} ?>> > 1 Tahun</option>
                  <option value="Lainnya" <?php if($data['lama_bekerja'] == 'Lainnya'){echo 'selected';} ?>>Lainnya</option>
                </select>
              </div>
              <span class="col-lg-2">Kesesuaian Bidang Pekerjaan dengan Jurusan Di Kampus</span>
              <div class="col-lg-4">
                <select class="form-control" name="kesesuaian" id="Kesesuaian">
                  <option value=""> - Pilih Kesesuaian Dulu - </option>
                  <option value="Sangat Sesuai" <?php if($data['kesesuaian'] == 'Sangat Sesuai'){echo 'selected';} ?>>Sangat Sesuai</option>
                  <option value="Sesuai" <?php if($data['kesesuaian'] == 'Sesuai'){echo 'selected';} ?>>Sesuai</option>
                  <option value="Kurang Sesuai" <?php if($data['kesesuaian'] == 'Kurang Sesuai'){echo 'selected';} ?>>Kurang Sesuai</option>
                  <option value="Tidak Sesuai" <?php if($data['kesesuaian'] == 'Tidak Sesuai'){echo 'selected';} ?>>Tidak Sesuai</option>
                </select>
              </div>
            </div>
          <div class="row" style="margin-bottom: 15px;">
            <span class="col-lg-2">Posisi</span>
            <div class="col-lg-4">
              <input type="text" value="<?php echo $data['posisi']; ?>" class="form-control" name='posisi' id="posisi">
            </div>
            <span class="col-lg-2"> Nama Perusahaan/Instansi</span>
            <div class="col-lg-4">
              <input type="text" value="<?php echo $data['nama_perusahaan']; ?>" class="form-control" name='namaperusahaan' id="namaPerusahaan">
            </div>
          </div>
          <div class="row" style="margin-bottom: 15px;">
            <span class="col-lg-2">Rata-Rata Penghasilan/Gaji per Tahun Perusahaan Sekarang</span>
            <div class="col-lg-4">
              <select class="form-control" id="rata2Gaji" name='rata2gaji'>
                <option value=""> - Pilih Rata-Rata Dulu - </option>
								<option value="< Rp. 1.000.000 "  <?php if($data['gaji'] == '< Rp. 1.000.000'){echo 'selected';} ?> >< Rp. 1.000.000 </option>
								<option value="Rp. 1.000.000 - Rp. 5.000.000" <?php if($data['gaji'] == 'Rp. 1.000.000 - Rp. 5.000.000'){echo 'selected';} ?> >Rp. 1.000.000 - Rp. 5.000.000</option>
								<option value="Rp. 5.000.000 - Rp. 10.000.000" <?php if($data['gaji'] == 'Rp. 5.000.000 - Rp. 10.000.000'){echo 'selected';} ?>>Rp. 5.000.000 - Rp. 10.000.000</option>
								<option value="Rp. 10.000.000 - Rp. 15.000.000" <?php if($data['gaji'] == 'Rp. 10.000.000 - Rp. 15.000.000'){echo 'selected';} ?>> Rp. 10.000.000 - Rp. 15.000.000</option>
								<option value="Rp. 15.000.000 - Rp. 20.000.000" <?php if($data['gaji'] == 'Rp. 15.000.000 - Rp. 20.000.000'){echo 'selected';} ?> >Rp. 15.000.000 - Rp. 20.000.000</option>
								<option value="> Rp. 20.000.000" <?php if($data['gaji'] == '> Rp. 20.000.000'){echo 'selected';} ?>> > Rp. 20.000.000</option>
                </select>
              </div>
              <span class="col-lg-2">Lama Bekerja di Perusahaan Sekarang</span>
              <div class="col-lg-4">
                <select class="form-control" id="lamaBekerja" name='lamabekerja'>
                  <option value=""> - Pilih Lama Bekerja Dulu - </option>
                  <option value="< 1 Bulan" <?php if($data['lama_bekerja'] == '< 1 Bulan'){echo 'selected';} ?>> < 1 Bulan </option>
                  <option value="1 Bulan - 5 Bulan" <?php if($data['lama_bekerja'] == '1 Bulan - 5 Bulan'){echo 'selected';} ?>>1 Bulan - 5 Bulan</option>
                  <option value="5 Bulan - 10 Bulan" <?php if($data['lama_bekerja'] == '5 Bulan - 10 Bulan'){echo 'selected';} ?>>5 Bulan - 10 Bulan</option>
                  <option value="> 1 Tahun" <?php if($data['lama_bekerja'] == '> 1 Tahun'){echo 'selected';} ?>> > 1 Tahun</option>
                  <option value="Lainnya" <?php if($data['lama_bekerja'] == 'Lainnya'){echo 'selected';} ?>>Lainnya</option>
                </select>
              </div>
            </div>
            <div class="row" style="margin-bottom: 15px;">
                  <span class="col-lg-2">Alamat Pekerjaan Sekarang Bekerja</span>
                  <div class="col-lg-10">
                    <textarea type="text" class="form-control" name='alamat' id="alamat_perusahaan"><?php echo $data['alamat_bekerja']; ?></textarea>
                  </div>
                </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" name="submit" class="btn btn-success btn-md pull-right"><i class="fa fa-save"></i> Ubah Informasi Data</button>
                <a class="btn btn-primary btn-md" onclick="self.history.back()"> <i class="fa fa-arrow-left"></i>  Kembali</a>
              </div>
            </div>
          </form>

        <?php }elseif($statusAlumni==='Lanjut Studi'){?>
         <form action="simpan-data1" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="row" style="margin-bottom: 15px;">
            <span class="col-lg-2">Universitas Lanjut</span>
            <div class="col-lg-10">
              <input type="text" name='univlanjut' class="form-control" id="univLanjut" value="<?php echo $data['nama_univ']; ?>">
            </div>
          </div>
          <div class="row" style="margin-bottom: 15px;">
            <span class="col-lg-2">Program Studi</span>
            <div class="col-lg-10">
              <input type="text" class="form-control" name='prodilanjut' id="prodiLanjut" value="<?php echo $data['program_studi2']; ?>">
            </div>
          </div>
          <div class="row" style="margin-bottom: 15px;">
            <span class="col-lg-2">Semester</span>
            <div class="col-lg-4">
              <select class="form-control" id="semesterLanjut" name='semesterlanjut'>
                <option value=""> - Pilih Semester Dulu - </option>
                <option value="Semester 1" <?php if($data['semester'] == 'Semester 1'){echo 'selected';} ?>>Semester 1</option>
                <option value="Semester 2" <?php if($data['semester'] == 'Semester 2'){echo 'selected';} ?>>Semester 2</option>
                <option value="Semester 3" <?php if($data['semester'] == 'Semester 3'){echo 'selected';} ?>>Semester 3</option>
                <option value="Semester 4" <?php if($data['semester'] == 'Semester 4'){echo 'selected';} ?>>Semester 4</option>
                <option value="Semester 5" <?php if($data['semester'] == 'Semester 5'){echo 'selected';} ?>>Semester 5</option>
                <option value="Semester 6" <?php if($data['semester'] == 'Semester 6'){echo 'selected';} ?>>Semester 6</option>
                <option value="Semester 7" <?php if($data['semester'] == 'Semester 7'){echo 'selected';} ?>>Semester 7</option>
                <option value="Semester 8" <?php if($data['semester'] == 'Semester 8'){echo 'selected';} ?>>Semester 8</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <button type="submit" name="submit" class="btn btn-success btn-md pull-right"><i class="fa fa-save"></i> Ubah Informasi Data</button>
              <a class="btn btn-primary btn-md" onclick="self.history.back()"> <i class="fa fa-arrow-left"></i>  Kembali</a>
            </div>
          </div>
        </form>

      <?php }elseif($statusAlumni==='Belum Bekerja'){?>
        <?php
        $_SESSION['pesan'] = 'Update Data Berhasil';
        echo '<script>window.location="profil-alumni"</script>';
      ?>
    <?php } }?>
  </div>
</div> 
</div>
</section>
</div>
<?php
include 'global_footer.php';
?>