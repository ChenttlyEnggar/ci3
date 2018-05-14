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
					<li><a class="page-scroll" href="<?php echo base_url() ?>Datatablesctr">Data Tabel</a></li>
				</ul>
			</div>   
		</div>
	</nav>    				
</div>

    <header class=" text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Data Tables</strong>
            </h3><hr>
          </div>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                             <th>Id_Kategori</th>
                            <th>Tanggal</th>
                            <th>Penulis</th>
                            <th>Sumber</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_blog ?></td>
                            <td><?php echo $d->judul ?></td>
                            <td><?php echo $d->id ?></td>
                            <td><?php echo $d->tanggal?></td>
                            <td><?php echo $d->nama_penulis ?></td>
                            <td><?php echo $d->penerbit ?></td>
                            <td>
                                <a href="<?php echo base_url('/home/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>