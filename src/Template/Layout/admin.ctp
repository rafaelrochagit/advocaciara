<!DOCTYPE html>
<html lang="en">

	<head>

	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>Admin Advocacia RA</title>

	  <!-- Custom fonts for this template-->
	  <?= $this->Html->css('fontawesome-free-5.6.3/css/all.min.css') ?>

	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	  <!-- Custom styles for this template-->
	  <?= $this->Html->css('admin/sb-admin-2.min.css') ?>
	  <!--
	  <link href="css/sb-admin-2.min.css" rel="stylesheet">
		-->

	  <!-- Bootstrap core JavaScript-->

 <?= $this->Html->script('admin/vendor/jquery/jquery.min.js')?>
 <?= $this->Html->script('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>

  <!-- Core plugin JavaScript-->
 <?= $this->Html->script('admin/vendor/jquery-easing/jquery.easing.min.js')?>

  <!-- Custom scripts for all pages-->
 <?= $this->Html->script('admin/js/sb-admin-2.min.js')?>

  <!-- Page level plugins -->
 <?= $this->Html->script('admin/vendor/chart.js/Chart.min.js')?>

  <!-- Page level custom scripts -->
 <?= $this->Html->script('admin/js/demo/chart-area-demo.js')?>
 <?= $this->Html->script('admin/js/demo/chart-pie-demo.js')?>
	</head>

	<body id="page-top">
		 <!-- Page Wrapper -->
	  <div id="wrapper">
	  	<?= $this->element('admin_menu'); ?>
	  	    <!-- Content Wrapper -->
	    <div id="content-wrapper" class="d-flex flex-column">

	      <!-- Main Content -->
	      <div id="content">
	        <!-- Begin Page Content -->
	        <div class="container-fluid">
	          <?= $this->fetch('content') ?>
	      	</div>
	      <!-- End of Main Content -->

	     <?= $this->element('admin_footer'); ?>

	    </div>
		
		</div>
	</body>
</html>