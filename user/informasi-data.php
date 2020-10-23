<?php 
include '../inc/koneksi.php';
include 'global_header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Selamat datang 
     <small><?php echo "".$user; echo " ~ " .$nama; ?></small>
   </h1>
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="box box-warning color-palette-box">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-tag"></i> Informasi Data Anda</h3>
    </div>
    <div class="box-body">

      <?php
      $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_pekerjaan ON data_pekerjaan.id_pk = alumni_profil.id_pk INNER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user = '".$_SESSION['data_id']."'");

      foreach ($profil as $data) {          
        ?>
        <!-- info row -->
        <div class="row"> <!-- baris 1 -->

          <div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
            <?php
            $foto = $data["foto"];
            if($foto===''){?>
              <img style="height: 200px"  src="../foto/alumni/anonim.png"> </div>
            <?php } else {?>
              <img style="height: 200px"  src="../foto/alumni/<?php echo $data['foto']; ?>"> </div>
            <?php }; ?>

            <div class="col-md-10">
              <div class="box-body no-padding">
               <p class="lead">Data Pribadi:</p>
               <table class="table table-condensed">
                <thead>
                  <th width="30%"></th>
                  <th width="40%"></th>
                </thead>
                <tbody>
                  <tr>
                    <td> <strong>Nama Lengkap</strong></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                  </tr>
                  <tr>
                   <td> <strong>Tempat Tanggal Lahir</strong></td>
                   <td><?php echo $data['tmpt_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td>
                 </tr>
                 <tr>
                   <td> <strong>Jenis Kelamin</strong></td>
                   <td><?php echo $data['jk']; ?></td>
                 </tr>
                 <tr>
                  <td> <strong>Agama</strong></td>
                  <td><?php echo $data['nama_agama']; ?></td>
                </tr>
                <tr>
                  <td> <strong>Alamat Sekarang</strong></td>
                  <td><?php echo $data['alamat']; ?></td> 
                </tr>
                <tr>
                  <td> <strong>Provinsi</strong></td>
                  <td><?php echo $data['nama_provinsi']; ?></td>
                </tr>
                <tr>
                 <td> <strong>Kabupaten</strong></td>
                 <td><?php echo $data['nama_kota']; ?></td>
               </tr>

               <tr>
                 <td> <strong>Pekerjaan</strong></td>
                 <td><?php echo $data['jenis_pk']; ?></td>
               </tr>
               <tr>
                <td> <strong>Kantor</strong></td>
                <td><?php echo $data['kantor']; ?></td>
              </tr>
              <tr>
                <td> <strong>No Telepon</strong></td>
                <td><?php echo $data['no_telp']; ?></td>
              </tr>
              <tr>
               <td> <strong>Email</strong></td>
               <td><?php echo $data['email']; ?></td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>    
     <div class="row"></div>

   </div> <!-- tutup baris 1 -->
   <div class="row">
    <div class="col-sm-2 col-md-2 ">
    </div>
    <div class="col-md-10">
      <div class="box-body no-padding">
       <p class="lead">Informasi Studi:</p>
       <table class="table table-condensed">
        <thead>
          <th width="30%"></th>
          <th width="40%"></th>
        </thead>
        <tbody>
          <tr>
            <td> <strong>Nim</strong></td>
            <td><?php echo $data['nim']; ?></td> 
          </tr>          
          <tr>
           <td> <strong>Judul Skripsi</strong></td>
           <td><?php echo $data['judul_skripsi']; ?></td>
         </tr>
         <tr>
           <td> <strong>Jurusan</strong></td>
           <td>Pendidikan Teknik Elektro</td>
         </tr>
         <tr>
           <td> <strong>Program Studi</strong></td>
           <td><?php echo $data['program_studi']; ?></td>
         </tr>
         <tr>
           <td> <strong>Tahun Masuk</strong></td>
           <td><?php echo $data['th_masuk']; ?></td>
         </tr>
         <tr>
           <td> <strong>Tanggal Lulus</strong></td>
           <td><?php echo $data['th_keluar']; ?></td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>    
<p>&nbsp;</p>
 <div class="row no-print">
   <div class="box-body">
    <div class="col-xs-12">
     <center><a class="btn btn-success btn-sm pull" href="edit-profil"> <i class="fa fa-edit"></i> Edit Informasi</a></center>
     </div>
    </div>
    </div></div>
    <?php
  }?>

</div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'global_footer.php'; ?>

