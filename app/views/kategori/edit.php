<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include('app/views/templates/dashboard-header.php')

    ?>
</head>

<body class="theme-light">
    <div id="app">
        <?php

        include('app/views/templates/dashboard-sidebar.php')

        ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Kategori</h3>
                            <p class="text-subtitle text-muted">
                                Page untuk edit data kategori lowongan
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Kategori</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASE_URL ?>/kategori/update/<?= $data['kategori']['id'] ?>" method="POST">
                                <div class="form-group">
                                    <label for="name">Nama Kategori</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kategori" value="<?= $data['kategori']['name'] ?>">
                                </div>
                                <div class="w-100 d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <?php

            include('app/views/templates/dashboard-footer.php')

            ?>
        </div>
    </div>

    <?php

    include('app/views/templates/dashboard-script.php')

    ?>
</body>

</html>