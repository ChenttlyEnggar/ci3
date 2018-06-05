 <?php
        echo form_open('about/tambah', array('enctype'=>'multipart/form-data')); 
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
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
           <td>Nama Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_nama_penulis" value="<?php echo set_value('input_nama_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Lokasi Penulis</td>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulis" value="<?php echo set_value('input_lokasi_penuis'); ?>"></td>
        </tr>
          <tr>
           <td>Penerbit </td>
          <td>:</td>
          <td><input type="text" name="input_penerbit" value="<?php echo set_value('input_penerbit'); ?>""></td>
        </tr>
         <tr>
          <label>Category</label>
          <select name="id" class="form-control" required>
            <option value="">Pilih Category</option>
            <?php foreach ($Category as $key): ?>
              <option value="<?php echo $key->id; ?>"><?php echo $key->cat_name; ?></option>
              <?php endforeach; ?>
            </select>
            </tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>

<?php if(!$this->session->userdata('logged_in')) : ?>

                   <div class="btn-group" role="group" aria-label="Data baru">
                         <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-sm btn-info')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-sm btn-info')); ?>

                    </div>

                <?php endif; ?>


                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">


                         <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-sm btn-info')); ?>

                        
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-sm btn-info')); ?>
                    </div>
                <?php endif; ?>

             </div>
         </nav>

       <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
    </nav>


    </div>