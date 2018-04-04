<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url("asset/css/bootstrap.min.css") ?>">
    <script src="<?= base_url("asset/js/bootstrap.min.js")?>"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">arwinata</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="table-responsive">
                    <h1>Biodata saya dari Array</h1>
                    <table class="table table-hover">
                        <tbody>
                        <?php foreach ($biodata_array as $key){?>
                            <tr>
                                <td><?= $key['nama']?></td>
                            </tr>
                            <tr>
                                <td><?= $key['nim']?></td>
                            </tr>
                            <tr>
                                <td><?= $key['alamat']?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="table-responsive">
                    <h1>Biodata saya dari Object</h1>
                    <table class="table table-hover">
                        <tbody>
                        <?php foreach ($biodata_object as $key){?>
                            <tr>
                                <td><?= $key->nama?></td>
                            </tr>
                            <tr>
                                <td><?= $key->nim?></td>
                            </tr>
                            <tr>
                                <td><?= $key->alamat?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="table-responsive">
                    <h1>Biodata saya dari Builder Array</h1>
                    <table class="table table-hover">
                        <tbody>
                        <?php foreach ($biodatabuilder_array as $key){?>
                            <tr>
                                <td><?= $key['nama']?></td>
                            </tr>
                            <tr>
                                <td><?= $key['nim']?></td>
                            </tr>
                            <tr>
                                <td><?= $key['alamat']?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="table-responsive">
                    <h1>Biodata saya dari Builder Object</h1>
                    <table class="table table-hover">
                        <tbody>
                        <?php foreach ($biodatabuilder_object as $key){?>
                            <tr>
                                <td><?= $key->nama?></td>
                            </tr>
                            <tr>
                                <td><?= $key->nim?></td>
                            </tr>
                            <tr>
                                <td><?= $key->alamat?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>