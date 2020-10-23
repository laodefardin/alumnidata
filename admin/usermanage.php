<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage User
      <small>Pengaturan user dan admin</small>
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
        <div class="box-title"><h4>Daftar Alumni Belum Aktif</h4></div>
      </div>
      <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <th width="5%">No</th>
            <th width="40%">Nama Lengkap</th>
            <th width="15%">Login Terakhir</th>
            <th width="20%">Status</th>
            <th width="30%">Aksi</th>
          </thead>
          <?php
          $result = $koneksi->query("SELECT * FROM alumni_profil INNER JOIN user ON user.id_user = alumni_profil.id_user WHERE active = '0' AND level = 'user' ORDER BY last_login DESC");

          $no=0; foreach ($result as $data): $no++  
          // while($result=mysqli_fetch_assoc($data)):        
          ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><a href="profil.php?id=<?php echo $data['id_user']; ?>"><?php echo $data['nama_lengkap']; ?></a></td>
             <td>
                    <?php
                    $last_login = $data["last_login"];
                    if($last_login==='0000-00-00 00:00:00'){
                      echo "Belum Login";
                    }else{
                      echo time_ago($data['last_login']);
                    } ;?>
                  </td>
            <td>
              <?php
              echo "<span class='label bg-yellow'>Belum Aktif</span>";
              ?>
            </td>
            <td>
              <a href="manage-aktif.php?aktifkan=<?php echo $data['id_user']?>" class="btn btn-primary">Aktifkan</a> 
              <a href="manage-hapus.php?hapus=<?php echo $data['id_user']?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            <!--   <form action="../global_proses.php" method="post">
                <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                <input type="hidden" name="aksi" value="aktifkan">
                <button type="submit" class="btn btn-primary">Aktifkan</button> </form></td> 
                <td>
                  <form action="../global_proses.php" method="post">
                    <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                    <input type="hidden" name="aksi" value="hapus_alumni">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus data pengguna? Pengguna ini akan dihapus dan tidak dapat dikembalikan.')">
                      <i class="fa fa-trash"></i></button>
                    </form> -->
                    <!-- </td> -->
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          </div>

          <div class="box box-success">
            <div class="box-header">
              <div class="box-title"><h4>Daftar Alumni Aktif</h4></div>
            </div>
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <th width="5%">No</th>
                  <th width="40%">Nama Lengkap</th>
                  <th width="15%">Login Terakhir</th>
                  <th width="10%">Status</th>
                  <th width="30%">Aksi</th>
                </thead>
                <?php
                $result = $koneksi->query("SELECT * FROM alumni_profil INNER JOIN user ON user.id_user = alumni_profil.id_user WHERE active = '1' ORDER BY  last_login DESC");

                $no=0; foreach ($result as $data): $no++          
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><a href="profil.php?id=<?php echo $data['id_user']; ?>"><?php echo $data['nama_lengkap']; ?></a></td>
                  <td>
                    <?php
                    $last_login = $data["last_login"];
                    if($last_login==='0000-00-00 00:00:00'){
                      echo "Belum Login";
                    }else{
                      echo time_ago($data['last_login']);
                    } ;?>
                  </td>
                  <td>
                    <?php
                    echo "<span class='label bg-green'>Aktif</span>";
                    ?>
                  </td>
                  <td>
                    <a href="manage-noaktif.php?non-aktif=<?php echo $data['id_user']?>" class="btn btn-warning">Non-aktifkan</a>

                    <!--  <?php echo "<a href='#myModal' class='btn btn-danger' id='custId' data-toggle='modal' data-id=".$data['id_user']."><i class='fa fa-lock'></i></a>"; ?> -->

                    <a type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-edit<?php echo $data['id_user']?>"><i class="fa fa-lock"></i></a>
                    <?php
                    $level = $data["level"];
                    if($level==='user'){?>
                      <a href="manage-admin.php?admin=<?php echo $data['id_user']?>" class="btn btn-primary">Jadikan Admin</a>
                    <?php } else {?>
                      <a href="manage-user.php?user=<?php echo $data['id_user'] ?>" class="btn btn-success">Jadikan Member</a>
                    <?php };?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div> <!-- box-body -->
        </div> <!-- box box-success -->
      </div> <!-- content-wrapper -->
    </section> <!-- content -->

<!--     <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
      </div> -->

      <?php foreach ($result as $k){ ?>
        <div class="modal fade modal-edit<?php echo $k['id_user']?> modal-primary" tabindex="-1" role="dialog">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Password User</h4>
              </div>
              <div class="modal-body">
                <form action="manage-pass.php" method="post">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $k['id_user']?>">
                    <input type="password" required name="password" class="form-control" placeholder="Ketik Password Pengganti">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="submit" class="btn btn-outline">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>  
      <?php } ;?>

      <?php
      include 'global_footer.php';
      ?>
<!--   <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id_user');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'manage-pass.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script> -->

<!--   <?php
  include '../inc/koneksi.php';
if($_POST['submit']){
  $id = $_POST['id'];
  $password = $_POST['password'];

  echo $ubah = " UPDATE user SET password = '$password' WHERE id_user = '$id' ";
  echo $proses = $koneksi->query($ubah);
  // if ($proses){
  //  $_SESSION['pesan'] = 'Password Berhasil diubah';
  // }
  // header("location:usermanage");
}
?> -->

<?php
/**
 * @package  : BismaLabs Official Site
 * @author   : Bisma Labs - Developer <developer@bismalabs.co.id-->
 * @since    : 2017
 * @license  : https://bismalabs.co.id/
 */
function time_ago($datetime, $full = false)
{
 $today = time();
 $createdday = strtotime($datetime);
 $datediff = abs($today - $createdday);
 $difftext = "";
 $years = floor($datediff / (365 * 60 * 60 * 24));
 $months = floor(($datediff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
 $days = floor(($datediff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
 $hours = floor($datediff / 3600);
 $minutes = floor($datediff / 60);
 $seconds = floor($datediff);
        //year checker
 if ($difftext == "") {
  if ($years > 1)
    $difftext = $years . " tahun yang lalu";
  elseif ($years == 1)
    $difftext = $years . " tahun yang lalu";
}
        //month checker
if ($difftext == "") {
  if ($months > 1)
    $difftext = $months . " bulan yang lalu";
  elseif ($months == 1)
    $difftext = $months . " bulan yang lalu";
}
        //month checker
if ($difftext == "") {
  if ($days > 1)
    $difftext = $days . " hari yang lalu";
  elseif ($days == 1)
    $difftext = $days . " hari yang lalu";
}
        //hour checker
if ($difftext == "") {
  if ($hours > 1)
    $difftext = $hours . " jam yang lalu";
  elseif ($hours == 1)
    $difftext = $hours . " jam yang lalu";
}
        //minutes checker
if ($difftext == "") {
  if ($minutes > 1)
    $difftext = $minutes . " menit yang lalu";
  elseif ($minutes == 1)
    $difftext = $minutes . " menit yang lalu";
}
        //seconds checker
if ($difftext == "") {
  if ($seconds > 1)
    $difftext = $seconds . " detik yang lalu";
  elseif ($seconds == 1)
    $difftext = $seconds . " detik yang lalu";
}
return $difftext;
}

?>