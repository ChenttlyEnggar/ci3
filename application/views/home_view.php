<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>Yogyakarta</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="aseets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">  

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
					<li><a class="page-scroll" href="home">Home</a></li>
					<li><a class="page-scroll" href="home">About</a></li>
					<li><a class="page-scroll" href="home">Profil</a></li>
					<li><a class="page-scroll" href="about">Blog</a></li>
					
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
				</div> <a class="left carousel-control" href="#carousel-281873" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-281873" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>

	      <?php foreach ($artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            	<a href="About/detail/<?php echo $key->id_blog ?>" style="color"; black;">
              <h3><?php echo $key->judul ?></h3>
              <br>
              <img src="img/<?php echo $key->image;?>" alt="Image" width="500">
              <p>
                diupload tanggal : <?php echo $key->tanggal ?><br>
                
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>