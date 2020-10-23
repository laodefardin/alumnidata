  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Design By</b> Laode Muh. ZulFardinsyah
    </div>
   <strong>Copyright &copy; 2018 <a href=""> SiALUMNI JPTE </a> Universitas Negeri Makassar. </strong>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>

 <script src="../assets/js/jquery-2.2.3.min.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>

 <script src="../assets/js/Chart.min.js"></script>
 <script src="../assets/js/jquery.slimscroll.min.js"></script>
 <script src="../assets/js/fastclick.js"></script>
 <script src="../assets/js/app.min.js"></script>
 <script src="../assets/js/demo.js"></script>
 <script src="../assets/js/jquery.dataTables.min.js"></script>
 <script src="../assets/js/dataTables.bootstrap.min.js"></script>
 <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
 <script src="../assets/js/bootstrap3-wysihtml5.all.min.js"></script>
 <script src="../assets/js/pace.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({

    });
  });
</script>
<script>
 $(document).ready(function() {
  $('#example').DataTable( {
    initComplete: function () {
     this.api().columns([3, 4]).every( function () {
      var column = this;
      var select = $('<select><option value=""></option></select>')
      .appendTo( $(column.footer()).empty() )
      .on( 'change', function () {
        var val = $.fn.dataTable.util.escapeRegex(
          $(this).val()
          );

        column
        .search( val ? '^'+val+'$' : '', true, false )
        .draw();
      } );

      column
      .data()
      .unique()
      .sort()
      .each(function(d, j) {
        var val = $.fn.dataTable.util.escapeRegex(d);
        if (column.search() === "^" + val + "$") {
          select.append(
            '<option value="' + d + '" selected="selected">' + d + "</option>"
            );
        } else {
          select.append('<option value="' + d + '">' + d + "</option>");
        }
      });
    } );
   }
 } );
} );
</script>
<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
 <script>
  $(function () {
    $(".textarea").wysihtml5();
  });
</script>
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });
</script>
</body>
</html>