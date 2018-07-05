<?php $this->load->view('header&footer/header') ?>

<div class="form-group">
    <label for="">Choose your Membership</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="membership"
               id="elementarymember" value="2" checked>
        <label class="form-check-label" for="elementarymember">Elemantary</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="membership"
               id="middlemember" value="3">
        <label class="form-check-label" for="middlemember">Middle</label>
    </div>
</div>

<?php $this->load->view('header&footer/footer') ?>
