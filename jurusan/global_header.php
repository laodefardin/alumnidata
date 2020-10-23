<?php
include '../inc/koneksi.php';
session_start();
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../assets/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../assets/css/pace.min.css">
  <link rel="shortcut icon" href="../assets/favicon.ico">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../assets/css/_all-skins.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
/* Ensure that the demo table scrolls */
th, td { white-space: nowrap; }
div.dataTables_wrapper {
  width: 1020px;
  margin: 0 auto;
}

th input {
  width: 90%;
}
</style>
<body class="hold-transition skin-yellow sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Si</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SiAlumni</b> JPTE UNM</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-user fa-fw"></i> <?=$_SESSION['nm_lengkap']?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="edit-password">Ubah Password</a></li>
                <li class="divider"></li>
                <li><a href="../logout.php">logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../foto/admin.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
           <?php 
           $user = $_SESSION['username'];
           $nama = $_SESSION['nm_lengkap'];
            if (empty($user)){ // jika belum login maka akan di kembalikan ke page login.php
              echo "<script>alert('Maaf anda harus login dulu!');window.location= '../login'; </script>";
            }

          //jika akun berlevel "user" mengakses page admin
            $query = $koneksi->query("SELECT * FROM user WHERE username = '$user' ");
            $row   = $query->fetch_array();

            if ($row['level'] == "user"){
              echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../user/index';</script>";
            }
            //jika akun berlevel "admin" mengakses page admin
            if ($row['level'] == "admin"){
              echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../admin/index';</script>";
            }
            ?>  
            <p></i><?=$_SESSION['nm_lengkap']?></p>
            <a href="#"><i class="fa fa-circle text-success"></i><?=$_SESSION['username']?></a>
            
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>

          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Master </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="manage-tentang-jpte"><i class="fa fa-circle-o"></i> <span>Tentang JPTE</span></a></li>
              <li><a href="manage-dosen-jpte"><i class="fa fa-circle-o"></i> <span>Dosen JPTE</span></a></li>
            </ul>
          </li>

          <li class="active treeview">
            <a href="#">
              <i class="menu-icon fa fa-user"></i>
              <span>Alumni </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="alumni-data"><i class="fa fa-circle-o"></i> Data Alumni</a></li>
              <li><a href="lowongan-kerja-manage"><i class="fa fa-circle-o"></i> Lowongan Kerja</a></li>
              <li><a href="laporan-alumni"><i class="fa fa-circle-o"></i> Laporan Alumni</a></li>
            </ul>
          </li>

          <li class="active treeview">
            <a href="#">
              <i class="menu-icon fa fa-wrench"></i>
              <span>Pengaturan </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li><a href="edit-password"><i class="fa fa-circle-o"></i> Ubah Password</a></li>
            </ul>
          </li>

          
        </section>
        <!-- /.sidebar -->
      </aside>