<!DOCTYPE html>
<html lang="en">

<head>
	<title>idPlay - Supercorridor |
		<?= $title; ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/style.css">

	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
	<meta content="Coderthemes" name="author">
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/images/Logo_Supercorridor.png">

	<!-- third party css -->
	<link href="<?= base_url(); ?>assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
	<!-- third party css end -->

	<!-- App css -->
	<link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" id="light-style">
	<link href="<?= base_url(); ?>assets/frontend/css/style2.css" rel="stylesheet" type="text/css" id="light-style">

	<!-- third party css -->
	<link href="<?= base_url(); ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
	<!-- third party css end -->

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jQuery-Autocomplete-1.4.11">
	<style type="text/css">
		.autocomplete-suggestions {
			border: 1px solid #999;
			background: #FFF;
			overflow: auto;
		}

		.autocomplete-suggestion {
			padding: 2px 5px;
			white-space: nowrap;
			overflow: hidden;
		}

		.autocomplete-selected {
			background: #F0F0F0;
		}

		.autocomplete-suggestions strong {
			font-weight: normal;
			color: #3399FF;
		}

		.autocomplete-group {
			padding: 2px 5px;
		}

		.autocomplete-group strong {
			display: block;
			border-bottom: 1px solid #000;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand font-weight-bold" href="<?= base_url(); ?>pelayanan">idPlay.</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<?php if($title == "Home"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan" class="nav-link font-weight-bold">Home</a></li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan" class="nav-link font-weight-bold">Home</a></li>
					<?php endif; ?>
					<?php if($title == "Keluhan"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan/keluhan"
							class="nav-link font-weight-bold">Keluhan</a></li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan/keluhan" class="nav-link font-weight-bold">Keluhan</a></li>
					<?php endif; ?>
					<?php if($title == "Informasi Keluhan"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan/informasi_keluhan"
							class="nav-link font-weight-bold">Informasi Keluhan</a>
					</li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan/informasi_keluhan"
							class="nav-link font-weight-bold">Informasi Keluhan</a>
					</li>
					<?php endif; ?>
					<?php if($title == "Artikel"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan/artikel"
							class="nav-link font-weight-bold">Artikel</a>
					</li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan/artikel" class="nav-link font-weight-bold">Artikel</a>
					</li>
					<?php endif; ?>
					<?php if($title == "Tentang Kami"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan/tentang_kami"
							class="nav-link font-weight-bold">Tentang
							Kami</a></li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan/tentang_kami" class="nav-link font-weight-bold">Tentang
							Kami</a></li>
					<?php endif; ?>
					<?php if($title == "Hubungi Kami"): ?>
					<li class="nav-item active"><a href="<?= base_url(); ?>pelayanan/hubungi_kami"
							class="nav-link font-weight-bold">Hubungi
							Kami</a></li>
					<?php else: ?>
					<li class="nav-item"><a href="<?= base_url(); ?>pelayanan/hubungi_kami" class="nav-link font-weight-bold">Hubungi
							Kami</a></li>
					<!-- <li class="nav-item cta mr-md-2"><a href="#" class="nav-link"></a></li> -->
					<?php endif; ?>
				</ul>
			</div>
		</div>

	</nav>
	<!-- END nav -->
