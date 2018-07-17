<body>
<?php $this->load->view('header&footer/header'); ?>

<?php echo validation_errors('<div class = "alert alert-danger">', '</div>');?>
<?php echo form_open('user/edituser', array('class' => 'needs_validation', 'novalidate' => '')); ?>

<?php foreach ($detailUser as $key): ?>
    <center><legend>Edit User</legend></center>

    <input type="hidden" class="form-control" name="id" value="<?php echo $key['user_id'];?>" placeholder="Nama Lengkap">

    <div class="form-group">
        <label for='Nama'>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $key['nama']);?>" placeholder="Nama Lengkap">
    </div>
    <div class="form-group">
        <label for='Email'>Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo set_value('email', $key['email']);?>" placeholder="E-Mail">
    </div>
    <div class="form-group">
        <label for= 'Username'>Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo set_value('username', $key['username']);?>" placeholder="Username">
    </div>

    <button type="submit" class="btn btn-warning">Edit Data</button>
    <?php echo form_close();?>

<?php endforeach ?>

<?php $this->load->view('header&footer/footer.php'); ?>
</body>