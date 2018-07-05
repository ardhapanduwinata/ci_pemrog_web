<?php $this->load->view('header&footer/header') ?>
<div class="card-body">
    <h5><?php echo character_limiter($key->cat_name, 40) ?></h5>
    <p class="card-text"><?php echo word_limiter($key->cat_description, 20) ?></p>

    <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a href="<?php echo base_url('categories/'.$key->cat_id) ?>" class="btn btn-outline-secondary">Lihat Artikel</a>
            <a href="<?php echo base_url(). 'categories/edit/' . $key->cat_id ?>" class="btn btn-outline-secondary">Edit</a>
        </div>
    </div>
</div>
<?php $this->load->view('header&footer/footer') ?>