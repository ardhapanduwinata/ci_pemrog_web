<?php include "header&footer/header.php"?>
<div class="container-fluid" style="padding-left: 200px; padding-right: 200px">
    <div class="row">
        <div class="col col-md-12">
            <div class="container" style="background-image: url()">
                <div class="row">
                    <div class="table-responsive">
                        <h1>All Blogs</h1>
                        <a class="btn btn-outline-primary" href="<?= base_url()?>index.php/house/addBlog" role="button" style="float: right">Add New Article</a>
                        <br><br>
                        <?php foreach ($blog_array as $key){?>
                            <div style="background-image: url('asset/img/<?= $key['image_file']?>'); border-radius: 10px">
                                <table class="table" style="background-color: rgba(255,255,255,0.8)">
                                    <tbody>
                                    <tr>
                                        <td>Author</td>
                                        <td>:</td>
                                        <td><?= $key['author']?></td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td>:</td>
                                        <td><?= $key['date']?></td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>:</td>
                                        <td><?= $key['title']?></td>
                                    </tr>
                                    <tr>
                                        <td>Content</td>
                                        <td>:</td>
                                        <td><?= $key['content']?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <a style="float: right;" class="btn btn-danger" href="<?= base_url('house/deleteBlog/' . $key['id']) ?>">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>