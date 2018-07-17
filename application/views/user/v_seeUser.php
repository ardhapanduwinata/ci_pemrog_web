<body>
<!-- Begin of Navbar -->
<div class="container-fluid">
    <?php $this->load->view('header&footer/header.php');
    ?>
    <!-- end of navbar-->
    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>ID user</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>tanggal Daftar</th>
            <th>hapus</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($user as $key) {?>
            <tr>
                <td><?php echo $key['user_id']; ?></td>
                <td><?php echo $key['nama']; ?></td>
                <td><?php echo $key['email']; ?></td>
                <td><?php echo $key['register_date']; ?></td>
                <td>
                    <form action="<?php echo base_url('User/keEditUser')?>" method="post">
                        <input type="hidden" name= "edit" class="form-control" value="<?php echo $key['user_id']; ?>">
                        <button class="btn btn-warning">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo base_url('User/hapusUser')?>" method="post">
                        <input type="hidden" name= "id" class="form-control" value="<?php echo $key['user_id']; ?>">
                        <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus user <?php echo $key['nama']?> ?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</body>