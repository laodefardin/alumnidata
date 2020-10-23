<?php
include 'global_header.php';
?>
<div class="content-wrapper">
 <section class="content"> 
  <div class="box box-warning">
    <div class="box-body">

      <?php
      $user = $_SESSION['username'];
      $nama = $_SESSION['nm_lengkap'];

            if (empty($user)){ // jika belum login maka akan di kembalikan ke page login.php
              echo "<script>alert('Maaf anda harus login dulu!');window.location= '../login'; </script>";
            }
            //jika akun berlevel "admin" mengakses page user
            $query = $koneksi->query("SELECT * FROM user WHERE username = '$user' ");
            $row   = $query->fetch_array();
            if ($row['level'] == "admin"){
              echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../admin/index';</script>";
            }
            ?>

            <section class="invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-xs-12">
                  <h2 class="page-header">
                    Data Pribadi
                  </h2>
                </div>
                <!-- /.col -->
              </div>
              <?php
              $id_profil = isset($_GET['id_profil'])?$_GET['id_profil']*1:0;
              $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user = '$id_profil'");

              foreach ($profil as $data) {          
                ?>
                <!-- info row -->
                <div class="row"> <!-- baris 1 -->

                  <div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
                   <?php
                   $foto = $data["foto"];
                   if($foto===''){?>
                     <img style="width: 100%;"  src="../foto/alumni/anonim.jpg"> </div>              
                   <?php } else {?>
                    <img style="width: 100%;"  src="../foto/alumni/<?php echo $data['foto']; ?>"> </div>
                  <?php }; ?>

                  <div class="col-md-10">
                    <div class="box-body no-padding">
                     <table class="table table-condensed">
                      <tbody>
                       <tr>
                        <td style="white-space: normal;"><strong>Nama Lengkap</strong></td>
                        <td style="white-space: normal;"><?php echo $data['nama_lengkap']; ?></td>
                      </tr>
                      <tr>
                        <td style="white-space: normal;"><strong>Nim</strong></td>
                        <td><?php echo $data['nim']; ?></td> 
                      </tr>
                      <tr>
                       <td style="white-space: normal;"><strong>Jurusan</strong></td>
                       <td style="white-space: normal;">Pendidikan Teknik Elektro</td> 
                     </tr>
                     <tr>
                       <td style="white-space: normal;"><strong>Program Studi</strong></td>
                       <td style="white-space: normal;"><?php echo $data['program_studi']; ?></td>
                     </tr>
                     <tr>
                       <td style="white-space: normal;"><strong>Angkatan</strong></td>
                       <td style="white-space: normal;"><?php echo $data['th_masuk']; ?></td>
                     </tr>
                     <tr>
                       <td style="white-space: normal;"><strong>Lama Studi</strong></td>
                       <td style="white-space: normal;"><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
                     </tr>
                     <tr>
                       <td style="white-space: normal;"><strong>IPK</strong></td>
                       <td style="white-space: normal;"><?php echo $data['ipk']; ?></td>
                     </tr>
                     <tr>
                       <td style="white-space: normal;"><strong>Judul Skripsi</strong></td>
                       <td style="white-space: normal;"><?php echo $data['judul_skripsi']; ?></td>
                     </tr>
                   </tbody></table>
                 </div>
               </div>       
               <?php
             }?>
           </div> <!-- tutup baris 1 -->
           
           
           <div class="col-xs-12" style="padding: 10px;">
            <a style="text-align: right;" class="btn bg-gray btn-sm btn-flat pull-right" href="angkatan"> <i class="fa fa-left"></i> Kembali ke daftar alumni</a>
          </div>
          <!-- /.col -->
        </section>

      </div>
    </div>
  </section>
</div>
<?php
include 'global_footer.php';
?>