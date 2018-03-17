<!DOCTYPE html>
<html lang="zxx">
	<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <meta name="description" content="">
		  <meta name="author" content="">
		  <title>SB Admin - Start Bootstrap Template</title>
		
		<!-- General CSS Settings -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <!-- Custom fonts for this template-->
		  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		  <!-- Page level plugin CSS-->
		  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
		  <!-- Custom styles for this template-->
		  <link href="css/sb-admin.css" rel="stylesheet">
		<!-- <link rel="stylesheet" href="<?php echo $css;?>general_style.css"> -->
		<!-- Main Style of the template -->
		<!-- <link rel="stylesheet" href="<?php echo $css;?>main_style.css"> -->
		<!-- Landing Page Style -->
		<!-- <link rel="stylesheet" href="<?php echo $css;?>reset_style.css"> -->
		<!-- Awesomefont -->
		<!-- <link rel="stylesheet" href="<?php echo $css;?>font-awesome.min.css"> -->
		 <!-- Owl Stylesheets -->
    	<!-- <link rel="stylesheet" href="<?php echo $css;?>owl.carousel.min.css"> -->
    	<!-- <link rel="stylesheet" href="<?php echo $css;?>owl.theme.default.min.css"> -->
		<!-- Fav Icon -->
		<!-- <link rel="shortcut icon" href="<?php echo $images;?>favicon.png"> -->
        <!-- Fav Boostrap -->
        <!-- <link rel="stylesheet" href="<?php echo $css;?>bootstrap.min.css"> -->
        <!-- Fav Custom -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo $font;?>font-awesome.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo $css;?>one.css"/> -->
        <!-- JQuery --> 
		<script src="vendor/jquery/jquery.min.js"></script>
	    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	    <!-- Core plugin JavaScript-->
	    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	    <!-- Page level plugin JavaScript-->
	    <script src="vendor/chart.js/Chart.min.js"></script>
	    <script src="vendor/datatables/jquery.dataTables.js"></script>
	    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	    <!-- Custom scripts for all pages-->
	    <script src="js/sb-admin.min.js"></script>
	    <!-- Custom scripts for this page-->
	    <script src="js/sb-admin-datatables.min.js"></script>
	    <script src="js/sb-admin-charts.min.js"></script>
		<!-- <script src="<?php echo $js;?>jquery.min.js"></script> 
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5a713f2a75b77b0011b7e1e2&product=inline-share-buttons' async='async'></script> -->
	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      	@foreach($kategori as $kategori)
      	@if($page=='Kategori')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo url('http://localhost/yahya2/'.$kategori->urltitle);?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">{{$kategori->nama_page}}</span>
          </a>
        </li>
        @else
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo url('http://localhost/yahya2/'.$kategori->urltitle);?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">{{$kategori->nama_page}}</span>
          </a>
        </li>
        @endif
        @endforeach




        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">User List</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Hotels">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Hotels</span>
          </a>
        </li>
		   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kereta">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Stasiun Kereta</span>
          </a>
        </li>
			 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kereta">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Objek Wisata</span>
          </a>
        </li>
 -->
		
		
		
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

		<!-- Wrapper -->
		
			<!-- Main -->

			