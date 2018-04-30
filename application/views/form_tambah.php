
      <?php
        echo form_open('Artikel/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
  <?php echo validation_errors(); ?>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_konten" value="<?php echo set_value('input_konten'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_image" value="<?php echo set_value('input_image'); ?>"></td>
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_nama_penulis" value="<?php echo set_value('input_nama_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulis" value="<?php echo set_value('input_lokasi_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Lokasi Penulisan </td>
          <td>:</td>
          <td><input type="text" name="input_penerbit" value="<?php echo set_value('input_penerbit'); ?>"></td>
        </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
       

      <div class="form-group">
   <label>Kategori</label>
   <?php echo form_dropdown('cat_id', $categories, set_value('cat_id'), 'class="form-control" required' ); ?>
   <div class="invalid-feedback">Pilih dulu kategorinya gan sis</div>
</div>

    </div>