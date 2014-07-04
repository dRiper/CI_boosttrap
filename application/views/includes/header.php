<!DOCTYPE html> 
<html lang="es">
<head>
  <title>CodeIgniter Admin Sample Project</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/menu.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/shadowbox.css">
    
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/function.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/shadowbox.js"></script>
	<script type='text/javascript'> 
		Shadowbox.init({ 
		overlayColor: "#000", 
		overlayOpacity: "0.6", 
		 displayNav: true,
	}); 


</script> 
</head>
<body>
<div id="wrap">
	<header>
		<div class="inner relative">
			<a class="logo" href="http://www.freshdesignweb.com"><img src="<?=base_url();?>assets/images/logo.png" alt="Citobiolab"></a>
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="current-menu-item"><a href="http://www.freshdesignweb.com">Inicio</a></li>
					<li <?php if($this->uri->segment(2) == 'products'){echo 'class="current-menu-item"';}?>>
	          			<a href="<?php echo base_url(); ?>admin/products">Products</a>
	       			 </li>
					<li class="parent">
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Mantenimiento</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Usuarios</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i>  Pacientes</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Empresas</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Análisis</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Médicos</a></li>
						</ul>
					</li>
					<li  class="parent"><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Procesos</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Agregar Análisis</a></li>
						</ul>
					</li>
					<li class="parent">
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Reportes</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Historial de Análisis</a></li>
						</ul>
					</li>
					<li>      <a href="<?php echo base_url(); ?>/index.php/user/logout">Logout</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div>    
