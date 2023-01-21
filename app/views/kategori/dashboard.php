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
                            <h3>Kategori</h3>
                            <p class="text-subtitle text-muted">
                                Page untuk manajemen data kategori lowongan
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Daftar Data Kategori</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['kategori'] as $k) : ?>
                                                <tr>
                                                    <td><?= $k['name'] ?></td>
                                                    <td>
                                                        <a href="<?= BASE_URL ?>/kategori/destroy/<?= $k['id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>
                                                        <a href="<?= BASE_URL ?>/kategori/edit/<?= $k['id'] ?>" class="btn btn-sm btn-warning"> Edit </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Data Kategori</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?= BASE_URL ?>/kategori/store" method="POST">
                                        <div class="form-group">
                                            <label for="name">Nama Kategori</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kategori">
                                        </div>
                                        <div class="w-100 d-flex flex-row-reverse">
                                            <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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