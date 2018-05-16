<?php $this->load->view('header&footer/header') ?><br>
<?php echo form_open('c_category/create', array('class' => 'needs-validation', 'novalidate' => '')); ?>
    <div class="container-fluid" style="padding-right: 200px; padding-left: 200px">
        <div class="form-group">
            <label for="cat_name">Nama Kategori</label>
            <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
            <div class="invalid-feedback">Isi judul dulu gan</div>
        </div>

        <div class="form-group">
            <label for="text">Deskripsi</label>
            <input type="text" class="form-control" name="cat_description"
                   value="<?php echo set_value('cat_description') ?>" required>
            <div class="invalid-feedback">Isi deskripsinya dulu gan</div>
        </div>
        <button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('c_category/viewAll') ?>" class="btn btn-outline-primary" style="float: right" role="button">See All Categories</a>
    </div>
<?php $this->load->view('header&footer/footer') ?>