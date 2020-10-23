<?php
include 'inc/koneksi.php';
?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title">Data Pribadi</h4>
</div>
<div class="modal-body">
  <?php
  $id_profil = isset($_GET['id_profil'])?$_GET['id_profil']*1:0;
  $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user= '$id_profil' ");

  foreach ($profil as $data) {          
    ?>
    <div class="row"> <!-- baris 1 -->

      <div class="col-sm-3 col-md-3 col-lg-3 " align="center" style="margin-bottom: 25px"> 
        <?php
        $foto = $data["foto"];
        if($foto===''){?>
          <img style="width: 100%;"  src="foto/alumni/anonim.jpg"> </div>
        <?php } else {?>
          <img style="width: 100%;"  src="foto/alumni/<?php echo $data['foto']; ?>">  </div>
        <?php }; ?>

        <div class="col-md-9">
          <div class="box-body no-padding">
           <table class="table table-condensed">
            <tbody>
              <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td style="white-space: normal;"><?php echo $data['nama_lengkap']; ?></td>
              </tr>
              <tr>
                <td><strong>Nim</strong></td>
                <td><?php echo $data['nim']; ?></td> 
              </tr>
              <tr>
               <td><strong>Jurusan</strong></td>
                <td style="white-space: normal;">Pendidikan Teknik Elektro</td> 
              </tr>
              <tr>
               <td><strong>Program Studi</strong></td>
               <td style="white-space: normal;"><?php echo $data['program_studi']; ?></td>
             </tr>
             <tr>
               <td><strong>Angkatan</strong></td>
               <td style="white-space: normal;"><?php echo $data['th_masuk']; ?></td>
             </tr>
             <tr>
               <td><strong>Lama Studi</strong></td>
               <td style="white-space: normal;"><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
             </tr>
              <tr>
               <td><strong>IPK</strong></td>
               <td style="white-space: normal;"><?php echo $data['ipk']; ?></td>
             </tr>
             <tr>
               <td><strong>Judul Skripsi</strong></td>
               <td style="white-space: normal;"><?php echo $data['judul_skripsi']; ?></td>
             </tr>
           </tbody></table>
         </div>
       </div>       
       
   </div> <!-- tutup baris 1 -->
<?php
     }?>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
</div>