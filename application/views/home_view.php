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

				</ol>
				
					<div class="item active">
						<img alt="Carousel Bootstrap Third" src="assets/img/gambar1.png">
						<div class="carousel-caption">
							<h4>
								Candi Borobudur
							</h4>
						</div>
					</div>
				</div> <a class="left carousel-control" href="<?php echo base_url() ?>#carousel-281873" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="<?php echo base_url() ?>#carousel-281873" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>

	      <?php foreach ($Artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            	<a href="<?php echo base_url() ?>About/detail/<?php echo $key->id_blog ?>" style="color"; black;">`
             
              
              <img src='img/<?php echo $key->image;?>' alt="Image" width="500">
              <br>
               <h3><?php echo $key->judul ?></h3>
             </a>
             <br></b>
             <!-- <button>Edit</button> -->

             <!--<button>Delete</button> -->
             <a href='<?php echo base_url() ?>About/edit/<?php echo $key->id_blog?>' class='btn btn-sm btn-danger'>Edit</a>
             <a href='<?php echo base_url() ?>About/delete/<?php echo $key->id_blog;?>' class='btn btn-sm btn-danger'>Hapus</a>

              <p></a>
                diupload tanggal : <?php echo $key->tanggal ?><br>

                
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>

        <!-- form untuk menambahkan data -->
    <<!-- div class="container">
      <?php
        echo form_open('about/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table> -->
       <!--  <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr> -->
          <br>
          <li><a href="<?php echo base_url() ?>about/tambah" class="btn-sm btn-danger"> Tambah</a></li>
          <li><a href="<?php echo base_url() ?>category/create" class="btn-sm btn-info"> Tambah Kategori</a></li>
          <!-- <td colspan="3"><input type="submit" name="simpan" value="simpan"></td> -->
        </tr>
      </table>
    </div>
	
<!-- <ul class="pagination justify-content-center">
 <li class="page-item disabled">
 <a class="page-link" href="#" tabindex="-1">Previous</a>
 </li>
 <li class="page-item"><a class="page-link" href="#">1</a></li>
 <li class="page-item"><a class="page-link" href="#">2</a></li>
 <li class="page-item"><a class="page-link" href="#">3</a></li>
 <li class="page-item">
 <a class="page-link" href="#">Next</a>
 </li>
</ul>
 -->

 <?php
if(isset($links)) {
  echo $links;
}
?>

  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>