<?php
include '../inc/koneksi.php';
include 'global_header.php';
?>
<!DOCTYPE html>
<html>

<style type="text/css">
/* Ensure that the demo table scrolls */
th, td { white-space: nowrap; }
div.dataTables_wrapper {
  width: 1070px;
  margin: 0 auto;
}

th input {
  width: 100%;
}
</style>
<body class="hold-transition skin-yellow sidebar-mini">
  <div class="wrapper">

    <div class="content-wrapper" style="min-height: 501px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Daftar Dosen 
          <small>Fakultas Teknik Jurusan Pendidikan Teknik Elektro </small>
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
          <div class="box-title"><h4>Dosen Fakultas Teknik Jurusan Pendidikan Teknik Elektro</h4></div>
        </div>
        <div class="box-body table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead class="bg-green">
            <tr>
              <th style="width: 10px">No</th>
              <th style="width: 10px">Kode</th>
              <th>Nama Dosen</th>
              <th>NIP</th>
              <th>NIDN</th>
              <th>Pangkat Fungsional/Gol.</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = $koneksi->query("SELECT * FROM data_dosen");
            $no=0; foreach ($result as $data): $no++         
            ?>
            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $data['kode'];?></td>
              <td><?php echo $data['nama_dosen'];?></td>
              <td><?php echo $data['nip'];?></td>
              <td><?php echo $data['nidn'];?></td>
              <td><?php echo $data['pangkat'];?></td>
             </tr>
           <?php endforeach; ?>
         </tbody>
         <tfoot>
           <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Dosen</th>
            <th>Nip</th>
            <th>NIDN</th>
            <th>Pangkat Fungsional/Gol.</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>

</div>


<?php
include 'global_footer.php';
?>
<script>
  $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search" />' );
    } );
    
    // DataTable
    var table = $('#example').DataTable();
    
    // Apply the search
    table.columns().every( function () {
      var that = this;
      
      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
          .search( this.value )
          .draw();
        }
      } );
    } );
  } );
</script>
<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
</body>
</html>