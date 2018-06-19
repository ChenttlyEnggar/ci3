<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>Yogyakarta</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>aseets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css" type="text/css">  

    </head>
  <body>
 
  <nav class="navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a class="page-scroll" href="<?php echo base_url() ?>home">Home</a></li>
					<li><a class="page-scroll" href="<?php echo base_url() ?>home">About</a></li>
					<li><a class="page-scroll" href="<?php echo base_url() ?>home">Profil</a></li>
					<li><a class="page-scroll" href="<?php echo base_url() ?>about">Blog</a></li>
					<li><a class="page-scroll" href="<?php echo base_url() ?>category">Kategori</a></li>
          <li><a class="page-scroll" href="<?php echo base_url() ?>Datatablesctr">Data Table</a></li>
				</ul>
			</div>   
		</div>
	</nav>    				
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-281873">
				<ol class="carousel-indicators">
					</li>
					<li data-slide-to="2" data-target="#carousel-281873" class="active">
					</li>


					<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<main role="main" class="container">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Kodepos</label>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
					</div>
					<div class="form-group">
					    <label for="">Pilihan</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="reseller" value="2" checked>
					        <label class="form-check-label" for="reseller">Reseller</label>
					    </div>
					     <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="customer" value="3">
					        <label class="form-check-label" for="customer">Customer</label>
					    </div>
					</div>

					<button type="submit" class="btn btn-primary btn-block">Daftar</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>
</main>

