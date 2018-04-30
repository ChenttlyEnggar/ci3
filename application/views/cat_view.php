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
          <li><a class="page-scroll" href="#carousel-281873">Home</a></li>
          <li><a class="page-scroll" href="#sejarah">About</a></li>
          <li><a class="page-scroll" href="#profil">Profil</a></li>
          <li><a class="page-scroll" href="about">Blog</a></li>
           <li><a class="page-scroll" href="about">Kategori</a></li>
        </ul>
      </div>   
    </div>
  </nav>            
</div>
<br><br><br><br>

<div>
  <h1><a href='category/create' class='btn btn-sm btn-denger'> Tambah Kategori</a></h1>
</div>
	

    <div class="well well-sm">
      <?php
        foreach ($category as $key) :  ?>
          <div class="row">
            <div class="col-sm-12 col-md-12">
             <table>
             	<tr>
			          <td><font color="black"> ID CATEGORY </font></td>
			          <td><font color="black">:</td></font>
			          <td><font color="black"><?php echo $key->id ?></td></font>
             	</tr>
             	<tr>
             		<td><font color="black">Category Name</td></font>
          			<td><font color="black">:</td></font>
          			<td><font color="black"><?php echo $key->cat_name ?></td></font>

             	</tr>
             	<tr>
             		<td><font color="black">Category Description</td></font>
          			<td><font color="black">:</td></font>
          			<td><font color="black"><?php echo $key->cat_description ?></td></font>
             		  
             	</tr>
              <td>
               <a href='category/Edit/<?php echo $key->id;?>' class='btn btn-sm btn-denger'> Edit </a>     
                <a href='category/Delete/<?php echo $key->id;?>' class='btn btn-sm btn-denger'> Hapus </a>         
              </td>
          </div>
      </div>
  </div>
<?php endforeach;?>


<!-- Bootstrap core JavaScript -->
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>