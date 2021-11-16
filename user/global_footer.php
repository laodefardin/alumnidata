  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Design By</b> LF -->
    </div>
    <strong><center>Copyright &copy; 2021 <a href=""> Portal Alumni Pascasarjana </a> Universitas Negeri Makassar. </center></strong>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>

 <!-- jQuery 2.2.3 -->
 <script src="../assets/js/jquery-2.2.3.min.js"></script>
 <!-- Bootstrap 3.3.6 -->
 <script src="../assets/js/bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="../assets/js/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="../assets/js/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="../assets/js/app.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../assets/js/demo.js"></script>
 <script src="../assets/js/bootstrap-datepicker.js"></script>
 <script src="../assets/js/jquery.dataTables.min.js"></script>
 <script src="../assets/js/dataTables.bootstrap.min.js"></script>
 <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({

    });
  });
</script>
<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
</body>
</html>