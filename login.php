<?php
  include 'inc/koneksi.php';
  session_start();
  if (isset($_POST['aksi'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($username) < 2 ) {
       //validasi username tidak bpleh kosong
      $error = 'Password Tidak Boleh Kosong';
    }else if( strlen($password) < 2 ){
          //validasi password tidak boleh kosong
     $error = 'Password Tidak boleh kosong';
   }else{
          //mengubah semua karakter ke bentuk string
    $username = $koneksi->escape_string($username);
    $password = $koneksi->escape_string($password);
          //hash dengan md5
    $password = md5($password);        
    $query    = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result   = $koneksi->query($query);
    $row      = $result->num_rows;
    $sql      = $koneksi->query("SELECT * FROM user WHERE username = '$username'");
    $akun     = $sql->fetch_assoc();

        if ($row > 0){ //jika data ada
          $akun = $result->fetch_assoc();
          if ($akun['level'] == "admin") { 
           $_SESSION['username'] = $akun["username"];
           $_SESSION['nm_lengkap'] = $akun["nm_lengkap"];
           header("location: admin/index");
         }elseif  ($akun['level'] == "user") {
           $_SESSION['data_id'] = $akun["id_user"];
           $_SESSION['username'] = $akun["username"];
           $_SESSION['password'] = $akun["password"];
           $_SESSION['nm_lengkap'] = $akun["nm_lengkap"];
           $_SESSION['th_masuk'] = $akun["th_masuk"];
           $profil = $koneksi->query("SELECT * FROM alumni_profil WHERE id_user = '".$_SESSION['data_id']."' ");
           $a = $profil->fetch_assoc();
           $_SESSION['data_id'] = $a["id_user"];
           $_SESSION["th_masuk"] = $a["th_masuk"];
           header("location: user/index");
         }elseif  ($akun['level'] == "jurusan") {
         $_SESSION['data_id'] = $akun["id_user"];
         $_SESSION['username'] = $akun["username"];
         $_SESSION['password'] = $akun["password"];
         $_SESSION['nm_lengkap'] = $akun["nm_lengkap"];
         header("location: jurusan/index");
       }
     }else{
         $_SESSION['pesan'] = 'Username dan Password Tidak ditemukan';
    }
  }
}
?>
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
    <div class="text-center">
      <img class="mb-4" src="assets/logo-unm.png" alt="" width="150" height="150">

      <div class="login-logo">
        <a href="index"><b></b>Aplikasi Data Alumni</a>
      </div>
      <p>Jurusan Pendidikan Teknik Elektro Fakultas Teknik 
      Universitas Negeri Makassar</p>
      <b><p>Username : Nim Saat Mahasiswa</p></b>
    </div>
        <?php 
    //menampilkan pesan jika ada pesan
    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
      // echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';

      echo '<div class="pesan">
      <div class="callout callout-danger" role="alert">'.$_SESSION['pesan'].'</div></div>';
      // echo '<div class="alert alert-success fade in">
      // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
      // </div>';
    }
    //mengatur session pesan menjadi kosong
    $_SESSION['pesan'] = '';
    ?>
    <!-- /.login-logo -->
    <div class="login-box-body">
     <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="Nim" placeholder="Username" required  autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       <!-- /.col -->
       <div class="col-xs-12">
        <button type="submit" name="aksi" id="aksi" value="login" class="btn btn-warning btn-block btn-flat">Login</button>
      </div>

      <p class="text-muted text-center" style="margin-top:  50px;">© 2018-2019</p>
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
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>