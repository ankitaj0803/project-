<div class="page-wrapper-row">
            <div class="page-wrapper-bottom">
                <div class="page-footer">
                    <div class="container"> 2021 &copy;Online-Quiz
                        <a target="_blank" href="#">Kanpur institute of Technology</a>
                    </div>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
        </div>
		<script src="js/sweetalert.js" type="text/javascript"></script>
		<?php
	if(isset($_SESSION['status']) && $_SESSION['status']!='')
	{
		?>
		<script>
	swal({
  title: "<?php echo $_SESSION['status'];?>",
  //text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Ok",
});
	
	</script>
	<?php
	unset($_SESSION['status']);
	}
	?>