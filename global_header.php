<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SiAlumni JPTE Universitas Negeri Makassar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="assets/css/_all-skins.css">
   <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="assets/css/daterangepicker.css">
   <link rel="stylesheet" href="assets/css/datepicker3.css">
   <link rel="stylesheet" href="assets/css/tambahan.css">
   <link rel="stylesheet" href="assets/css/ekko-lightbox.css">

   <!-- SLIDER OWL CAROUSEL -->
   <link rel="stylesheet" href="assets/css/owl.carousel.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.css">
   <link rel="stylesheet" href="assets/css/owl.theme.green.css">
   <link rel="shortcut icon" href="assets/favicon.ico">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#loading-status{
 position:fixed;
 top:40%;
 right:40%;
 background-color:#FFF;
 border:3px solid #000;
 padding:5px 7px;
 border-radius:5px;
 -moz-border-radius: 5px; 
 -webkit-border-radius: 5px;
 z-index:3000;
 display:none;
}

.meta-post {
  margin-bottom: -9px;
  margin-top: -13px;
}
.detail {
  margin-top: 9px;
  font-size: 13px;
}
@media (max-width: 767px){
  .tum {
    display: none;
  }

  .detail-post{
    font-size: 17px;
    line-height: 22px;
    padding-top: 30px;
  }
</style>

</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top" style="background-color: #444;">
        <div class="container">
          <div class="navbar-header">
            <a href="index" class="navbar-brand">
              <img src="assets/logo1.png" style="
              margin-top: -13px;
              height: 45px;
              width: 320px;
              display: block;
              "></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumni <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="alumni">Database Alumni</a></li>
                  <li><a href="panduan-pendaftaran">Panduan</a></li>
                  <li><a href="registrasi-alumni">Pendaftaran Alumni</a></li>
                  <li class="divider"></li>
                  <li><a href="pesan-kesan-alumni">Pesan Dan Kesan Alumni</a></li>
                </ul>
              </li>

              <li><a href="login">Login</a></li>
              <li><a href="berita">Berita</a></li>
              <li><a href="lowongan-kerja">Lowongan Kerja</a></li>
              <li><a href="galeri-alumni">Galeri</a></li>
              <li><a href="kontak-dan-saran">Kontak & Saran</a></li>
              <li><a href="tentang-jpte">Tentang JPTE UNM</a></li>


            </ul>
          </div>
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
  <!-- Full Width Column -->