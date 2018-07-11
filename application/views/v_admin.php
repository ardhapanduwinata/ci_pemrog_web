<?php include "header&footer/header"?><br><br>
<div class="container-fluid" style="padding-right: 200px; padding-left: 200px">
    <form method="post" action="<?= base_url('house/addBlog') ?>">
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
                <input type="text" name="author" class="form-control" id="author" placeholder="Author">
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
        </div>

        <div class="form-group row">
            <label for="image_file" class="col-sm-3 col-form-label">Image</label>
            <div class="form-group">
                <input type="file" name="image_file" class="form-control-file" id="image_file">
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">Content</label>
            <div class="form-group">
                <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-2" id="submit" style="float: right;" href="<?= base_url()?>index.php/house/adBlogDb">Submit</button>
    </form>
</div>
<?php include "header&footer/footer"?>
