</div>

</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script>
  $('.drop-down-ul').hide();
  $(".sub-menu").click(function () {
	$(".drop-down-ul").slideToggle("100");
  $(this).find(".angle").toggleClass("fa-angle-up fa-angle-down");
});
$('.drop-down-ul2').hide();
  $(".sub-menu2").click(function () {
	$(".drop-down-ul2").slideToggle("100");
  $(this).find(".angle").toggleClass("fa-angle-up fa-angle-down");
});
$('.drop-down-ul3').hide();
  $(".sub-menu3").click(function () {
	$(".drop-down-ul3").slideToggle("100");
  $(this).find(".angle").toggleClass("fa-angle-up fa-angle-down");
});
$('.drop-down-ul4').hide();
  $(".sub-menu4").click(function () {
	$(".drop-down-ul4").slideToggle("100");
  $(this).find(".angle").toggleClass("fa-angle-up fa-angle-down");
});
$('.drop-down-ul5').hide();
  $(".sub-menu5").click(function () {
	$(".drop-down-ul5").slideToggle("100");
  $(this).find(".angle").toggleClass("fa-angle-up fa-angle-down");
});
</script>
    
    <script>
    $(window).on("load",function(){
      $(".loader").fadeOut();

    });
  </script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    <script src="<?php echo base_url('assets/bootstrap-4.3.1/js/bootstrap.min.js') ?>"></script>
  </body>
</html>