<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php foreach ($default as $key); ?>
<?php echo form_open( 'category/Edit'.$key->id, array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="cat_name">Nama Kategori</label>
   <input type="text" class="form-control" name="cat_name" value="<?php echo $key->cat_name ?>" required>
   <!-- <div class="invalid-feedback">Isi judul dulu gan</div> -->
</div>

<div class="form-group">
   <label for="text">Deskripsi</label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo $key->cat_description ?>" required>
   <!-- <div class="invalid-feedback">Isi deskripsinya dulu gan</div> -->

   <button id="submitBtn" type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>

</body>
</html>