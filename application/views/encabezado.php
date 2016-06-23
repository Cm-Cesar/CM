<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CM - Control Maquinero</title>
		<meta name="description" content="control de maquinas de videojuegos">
		<meta name="author" content="Cesar Soto">
		<meta name="keyword" content="Maquinitas, administracion, juegos, videojuegos, control maquinero, cm">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<link href="<?php echo base_url(); ?>application/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url(); ?>application/js/jquery-ui-1.9.1.custom.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>application/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>application/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>application/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>application/plugins/select2/select2.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>application/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="<?php echo base_url(); ?>application/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>application/css/style_v2.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>application/plugins/chartist/chartist.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!--<script src="http://code.jquery.com/jquery.js"></script>-->
		<script src="<?php echo base_url(); ?>application/plugins/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>application/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url(); ?>application/plugins/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>application/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
		<script src="<?php echo base_url(); ?>application/plugins/tinymce/tinymce.min.js"></script>
		<script src="<?php echo base_url(); ?>application/plugins/tinymce/jquery.tinymce.min.js"></script>
		<!-- All functions for this theme + document.ready processing -->
		<script src="<?php echo base_url(); ?>application/js/devoops.js"></script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo base_url(); ?>index.php/menu">Control Maquinero</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<!--<a href="#" class="about">about</a>
						<a href="index_v1.html" class="style1"></a>-->
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="<?php echo base_url(); ?>application/index.php/menu" class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/calendar.html">
									<i class="fa fa-calendar"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="<?php echo base_url(); ?>application/|ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="<?php echo base_url(); ?>application/img/avatar.jpg" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenid@,</span>
										<span>Cesar Soto</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>application/ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>application/ajax/gallery_simple.html" class="ajax-link">
											<i class="fa fa-picture-o"></i>
											<span>Albums</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>application/ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?php echo base_url();?>application/ajax/dashboard.html" class="ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Resumen</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Catalagos</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_simple.html">Maquinas</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_flickr.html">Puntos</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_simple.html">Empleados</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_simple.html">Equipo de reparto</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Capturas</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_simple.html">Cortes</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_flickr.html">Asistencias</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						 <span class="hidden-xs">Reportes</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_simple.html">Cortes</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_flickr.html">Puntos</a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>application/ajax/gallery_flickr.html">Clientes</a></li>
					</ul>
				</li>
			</ul>
		</div>