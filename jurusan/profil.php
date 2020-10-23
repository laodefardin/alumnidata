<?php
include '../inc/koneksi.php';
include 'global_header.php';
?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>

  <section class="content">
    <div class="box box-warning">
      <div class="box-header">
        <div class="box-title"><h4>Data Pribadi</h4></div>
        <a style="text-align: right;" class="btn bg-gray btn-sm btn-flat pull-right" onclick="self.history.back()"> <i class="fa fa-arrow-left"></i>  Kembali</a>
      </div>

      <div class="box-body">
        <?php
        $id_profil = isset($_GET['id'])?$_GET['id']*1:0;
        $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user = '$id_profil'");
        if ($profil === FALSE) {
          die(mysql_error());
        }
        while ($data=mysqli_fetch_array($profil)) {
          ?>

          <div class="row"> <!-- baris 1 -->
            <div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
              <?php
              $foto = $data["foto"];
              if($foto===''){?>
               <img style="width: 100%;"  src="../foto/alumni/anonim.jpg"> </div>              
             <?php } else {?>
              <img style="width: 100%;"  src="../foto/alumni/<?php echo $data['foto']; ?>"> </div>
            <?php }; ?>
            <div class="col-md-5">
              <div class="box-body no-padding">
               <p class="lead">Data Pribadi:</p>
               <table class="table table-condensed">
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
              </tbody></table>
            </div>
          </div>       
          <div class="col-md-5">
            <div class="box-body no-padding">
             <p class="lead"></p>
             <tbody><table class="table table-condensed">
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
         </tbody></table><br>
       </div></div>
     </div> <!-- tutup baris 1 -->
     <div class="row">
      <div class="col-sm-2 col-md-2 ">
      </div>
      <div class="col-md-10">
        <p class="lead">Informasi Studi:</p>
        <table class="table table-condensed">
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
           <td> <strong>Tahun Lulus</strong></td>
           <td><?php echo $data['th_keluar']; ?></td>
         </tr>
       </table>
     </div>
     <?php
   }?>
   
 </section>
 <!-- /.content -->
 <!-- /.content -->
</div>
<?php
include 'global_footer.php';
?>