<?php
include '../inc/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal Alumni Pascasarjana Universitas Negeri Makassar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../assets/css/_all-skins.css">
   <link rel="stylesheet" href="../assets/css/datepicker3.css">
   <link rel="stylesheet" href="../assets/css/daterangepicker.css">
   <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.css">
   <link rel="shortcut icon" href="../assets/favicon.ico">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Si</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Portal Alumni</b> PPs UNM</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <?php
        $profil = $koneksi->query("SELECT * FROM alumni_profil WHERE id_user = '".$_SESSION['data_id']."'");
        foreach ($profil as $data) {          
          ?>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-user fa-fw"></i> <?=$_SESSION['nm_lengkap']?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="editpassword">Ubah Password</a></li>
                  <li class="divider"></li>
                  <li><a href="../logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

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


          <?php
          $foto = $data["foto"];
          if($foto==NULL){?>
            <img src="../foto/alumni/anonim.jpg" class="img-circle" alt="User Image">
          <?php } else {?>
            <img src="../foto/alumni/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image">
          <?php }; ?>

        <?php }?>

      </div>



      <div class="pull-left info">
        <?php
        $user = $_SESSION['username'];
        $nama = $_SESSION['nm_lengkap'];
        $masuk = $_SESSION['th_masuk'];
            if (empty($user)){ // jika belum login maka akan di kembalikan ke page login.php
              echo "<script>alert('Maaf anda harus login dulu!');window.location= '../login'; </script>";
            }
            
            $query = $koneksi->query("SELECT * FROM user WHERE username = '$user' ");
            $row   = $query->fetch_array();
            //jika akun berlevel "admin" mengakses page user
            if ($row['level'] == "admin"){
              echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../admin/index';</script>";}
                //jika akun berlevel "jurusan" mengakses page user
              if ($row['level'] == "jurusan"){
                echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../jurusan/index';</script>";}
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
                  <i class="fa fa-mortar-board"></i>
                  <span>Alumni </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="profil-alumni"><i class="fa fa-user"></i> Profil Alumni</a></li>
                  <li><a href="angkatan"><i class="fa fa-group"></i> List Data Alumni</a></li>
                  <li><a href="lowongan-kerja-manage"><i class="fa fa-circle-o"></i> Lowongan Kerja</a></li>
                  <li><a href="pesan-kesan-alumni"><i class="fa fa-send-o"></i> Pesan Dan Kesan</a></li>
                  <!-- <li><a href="manage-dosen-jpte"><i class="fa fa-circle-o"></i> <span>Dosen JPTE</span></a></li> -->
                </ul>
              </li>
              <li class="active treeview">
                <a href="#">
                  <i class="fa fa fa-gears"></i>
                  <span>Pengaturan </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="edit-profil-alumni"><i class="fa fa-circle-o"></i> Edit Profil</a></li>
                  <li><a href="uploadfoto"><i class="fa fa-circle-o"></i> Upload Foto</a></li>
                  <li><a href="editpassword"><i class="fa fa-circle-o"></i> Ganti Password</a></li>
                </ul>
              </li>


            </section>
            <!-- /.sidebar -->
          </aside>