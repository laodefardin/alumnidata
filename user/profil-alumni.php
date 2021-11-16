<?php 
include '../inc/koneksi.php';
include 'global_header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="box box-warning color-palette-box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-tag"></i> Informasi Data Anda</h3>
      </div>
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
        <!-- info row -->
        <div class="row"> <!-- baris 1 -->

          <div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
            <?php
            $foto = $data["foto"];
            if($foto==NULL){?>
              <img style="width: 100%;"  src="../foto/alumni/anonim.jpg"> </div>
            <?php } else {?>
              <img style="width: 100%;"  src="../foto/alumni/<?php echo $data['foto']; ?>"> </div>
            <?php }; ?>

            <div class="col-md-5">
              <div class="box-body no-padding">
               <p class="lead">Data Pribadi</p>
               <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table table-condensed">
                <tr>
                  <td><strong>Nama Lengkap</strong></td>
                  <td style="white-space: normal;"><?php echo $data['nama_lengkap']; ?></td>
                </tr>
                <tr>
                 <td> <strong>Tempat Tanggal Lahir</strong></td>
                 <td style="white-space: normal;"><?php echo $data['tmpt_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td>
               </tr>
               <tr>
                 <td> <strong>Jenis Kelamin</strong></td>
                 <td style="white-space: normal;"><?php echo $data['jk']; ?></td>
               </tr>
               <tr>
                <td> <strong>Agama</strong></td>
                <td style="white-space: normal;"><?php echo $data['nama_agama']; ?></td>
              </tr>
            </table>
          </div>
        </div> 
        <div class="col-md-5">
         <p class="lead"></p>
         <table class="table table-condensed">
           <tr>
            <td style="width: 140px;"><strong>Alamat Sekarang</strong></td>
            <td style="white-space: normal;"><?php echo $data['alamat']; ?></td> 
          </tr>
          <tr>
            <td> <strong>Provinsi</strong></td>
            <td style="white-space: normal;"><?php echo $data['nama_provinsi']; ?></td>
          </tr>
          <tr>
           <td> <strong>Kabupaten</strong></td>
           <td style="white-space: normal;"><?php echo $data['nama_kota']; ?></td>
         </tr>
         <tr>
          <td> <strong>No Telepon</strong></td>
          <td style="white-space: normal;"><?php echo $data['no_telp']; ?></td>
        </tr>
        <tr>
         <td> <strong>Email</strong></td>
         <td style="white-space: normal;"><?php echo $data['email']; ?></td>
       </tr>
     </table>
   </div>
 </div> <!-- tutup baris 1 -->
 <div class="row">
  <div class="col-sm-2 col-md-2 ">
  </div>
  <div class="col-md-10">
    <p class="lead">Informasi Studi:</p>
    <table class="table table-condensed">
      <tr>
        <td> <strong>Nim (Nomor Induk Mahasiswa)</strong></td>
        <td style="white-space: normal;"><?php echo $data['nim']; ?></td> 
      </tr>
      <tr>
       <td> <strong>Judul Tugas Akhir</strong></td>
       <td style="white-space: normal;"><?php echo $data['judul_skripsi']; ?></td>
     </tr>
     <!-- <tr>
       <td> <strong>Jurusan</strong></td>
       <td style="white-space: normal;">Pendidikan Teknik Elektro</td>
     </tr> -->
     <tr>
       <td> <strong>Program Studi</strong></td>
       <td style="white-space: normal;"><?php echo $data['program_studi']; ?></td>
     </tr>
     <tr>
       <td> <strong>Tahun Masuk</strong></td>
       <td style="white-space: normal;"><?php echo $data['th_masuk']; ?></td>
     </tr>
     <tr>
       <td> <strong>Tahun Lulus</strong></td>
       <td style="white-space: normal;"><?php echo $data['th_keluar']; ?></td>
     </tr>
     <tr>
       <td> <strong>Lama Studi</strong></td>
       <td style="white-space: normal;"><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
     </tr>
     <tr>
       <td> <strong>IPK</strong></td>
       <td style="white-space: normal;"><?php echo $data['ipk']; ?></td>
     </tr>
     <tr>
       <td> <strong>Predikat Yudisium</strong></td>
       <td style="white-space: normal;"><?php echo $data['yudisium']; ?></td>
     </tr>
     <tr>
       <td> <strong>No Ijasah</strong></td>
       <td style="white-space: normal;"><?php echo $data['no_ijasah']; ?></td>
     </tr>
     <tr>
       <td> <strong>Perkembangan Alumni</strong></td>
       <td style="white-space: normal;"><?php echo $data['statusalumni']; ?></td>
     </tr>
   </table>
 </div>
</div>

<?php
$status = $data["statusalumni"];
if ($status==='Bekerja') {?>
 <div class="row">
   <div class="col-sm-2 col-md-2 "></div>
   <div class="col-md-10">
    <p class="lead">Pekerjaan Sekarang</p>
    <table class="table table-condensed">
     <thead>
      <tr>
        <th style="width: 180px"></th>
        <th style="width: 270px;"></th>
      </tr>
    </thead>
    <tr>
      <td><strong>Posisi Pekerjaan</strong></td>
      <td style="white-space: normal;"><?php echo $data['posisi']; ?></td>
    </tr>
    <tr>
      <td><strong>Nama Perusahaan/Instansi</strong></td>
      <td style="white-space: normal;"><?php echo $data['nama_perusahaan']; ?></td>
    </tr>
    <tr>
      <td><strong>Rata-Rata Penghasilan</strong></td>
      <td style="white-space: normal;"><?php echo $data['gaji']; ?></td>
    </tr>
    <tr>
      <td><strong>Lama Bekerja</strong></td>
      <td style="white-space: normal;"><?php echo $data['lama_bekerja']; ?></td>
    </tr>
    <tr>
      <td><strong>Alamat Pekerjaan</strong></td>
      <td style="white-space: normal;"><?php echo $data['alamat_bekerja']; ?></td>
    </tr>
    <tr>
      <td><strong>Rentang Selesai Hingga Bekerja</strong></td>
      <td style="white-space: normal;"><?php echo $data['rentangJarak']; ?></td>
    </tr>
    <tr>
      <td style="white-space: normal;"><strong>kesesuaian Bidang Pekerjaan dengan Jurusan Di Kampus</strong></td>
      <td style="white-space: normal;"><?php echo $data['kesesuaian']; ?></td>
    </tr>
  </table>
</div>
</div>

<?php }elseif($status==='Lanjut Studi'){?>
  <div class="row">
   <div class="col-sm-2 col-md-2 "></div>
   <div class="col-md-10">
    <p class="lead">Lanjut Studi</p>
    <table class="table table-condensed">
     <thead>
      <tr>
        <th style="width: 180px"></th>
        <th style="width: 270px;"></th>
      </tr>
    </thead>
    <tr>
      <td><strong>Universitas Lanjut</strong></td>
      <td style="white-space: normal;"><?php echo $data['nama_univ']; ?></td>
    </tr>
    <tr>
      <td><strong>Program Studi</strong></td>
      <td style="white-space: normal;"><?php echo $data['program_studi2']; ?></td>
    </tr>
    <tr>
      <td><strong>Semester</strong></td>
      <td style="white-space: normal;"><?php echo $data['semester']; ?></td>
    </tr>
  </table>
</div>
</div>
<?php
}
}?>
<div class="row no-print">
 <div class="box-body">
  <div class="col-xs-12">
   <center><a class="btn btn-success btn-sm pull" href="edit-profil-alumni"> <i class="fa fa-edit"></i> Edit Informasi</a></center>
 </div>
</div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'global_footer.php'; ?>