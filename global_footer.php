
  <footer class="main-footer">
     <div class="container">
    <div class="pull-right hidden-xs">
      <!-- <b>Design By</b> Laode Muh. ZulFardinsyah -->
    </div>
    <strong>Copyright &copy; 2018 <a href=""> SiALUMNI JPTE </a> Universitas Negeri Makassar. </strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="assets/js/jquery-2.2.3.min.js" async></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/js/bootstrap.min.js" async></script>
<!-- SlimScroll -->
<script src="assets/js/jquery.slimscroll.min.js" async></script>
<!-- FastClick -->
<script src="assets/js/fastclick.js" async></script>
<!-- AdminLTE App -->
<script src="assets/js/app.min.js" async></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js" async></script>
<script src="assets/js/ekko-lightbox.js" async></script>
<script src="assets/js/bootstrap-datepicker.js" async></script>
<script src="assets/js/jquery.dataTables.min.js" async></script>
<script src="assets/js/dataTables.bootstrap.min.js" async></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
   
    });
  });
</script>
<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
<script src="assets/js/owl.carousel.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>
</body>
</html>
