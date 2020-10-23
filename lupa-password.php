<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Data Alumni | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/css/orange.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-yellow login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index"><b>Aplikasi</b>Data Alumni</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <h2><p class="login-box-msg">Lupa Password?</p></h2>
<form name="" method="post"> 
        <div class="form-group has-feedback">
          <input name="email" type="email" placeholder="Masukkan Email" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('Masukkan Email Dengan benar')">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
           
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" name="act_resset" value="Submit" class="btn btn-warning btn-block btn-flat">Kirim</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

</div>
<!-- /.login-box-body -->
</div>

<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="assets/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/js/icheck.min.js"></script>
</body>
</html>
<?php 
include 'inc/koneksi.php';
///////////////////////////////////////////////////////////////////////
if (isset($_POST['act_resset'])) {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);

$email = mysqli_real_escape_string($koneksi, trim($_POST['email']));
$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));
$datetime=date("h:i:s-j-M-Y");
 
// mencari alamat email si user
$query  = $koneksi->query("SELECT * FROM user WHERE email = '$email'");
$hasil  = $query->fetch_array();
$data = mysqli_fetch_array($hasil);
$cek = mysqli_num_rows($hasil);
$id_member = strip_tags($data['id_user']);
$alamatEmail = strip_tags($data['email']);
$nama = strip_tags($data['nama_lengkap']);
$username =trim(strip_tags($data['username']));
if ($cek == 1) {
 
// title atau subject email
$title = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan = "Kami telah meresset Ulang Kata sandi ".$nama." Dan anda dapat login kembali ke web kami \n\n 
DETAIL AKUN ANDA :\n Nama Penguna : ".$username." \n 
Kata sandi Anda yang baru adalah: ".$passwordbaru."\n\n 
\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) { 
 
// update password baru ke database (jika pengiriman email sukses)
$query = "UPDATE user SET password='$password', datetime='$datetime' WHERE id_user = '$id_user'";
$hasil = mysql_query($query);
 
if ($hasil) 
echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
'.$pesan.'<hr>';
}
else {
echo'<div class="warning">Pengiriman Kata sandi baru ke email gagal</div>';
}
}
else{
 
echo'<div class="warning">Alamat Email tidak ditemukan</div>';
}}?>