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

      <?php echo form_open('user/login'); ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
  </div>
<?php echo form_close(); ?>