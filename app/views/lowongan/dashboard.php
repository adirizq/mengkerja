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
                            <h3>Lowongan</h3>
                            <p class="text-subtitle text-muted">
                                Page untuk manajemen data lowongan
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Data Lowongan</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Perusahaan</th>
                                        <th>Kategori</th>
                                        <th>Tipe</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['lowongan'] as $l) : ?>
                                        <tr>
                                            <td><?= $l['name'] ?></td>
                                            <td><?= $l['company'] ?></td>
                                            <td><?= $l['c_name'] ?></td>
                                            <td><?= $l['type'] ?></td>
                                            <td>
                                                <a href="<?= BASE_URL ?>/lowongan/destroy/<?= $l['id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>
                                                <a href="<?= BASE_URL ?>/lowongan/edit/<?= $l['id'] ?>" class="btn btn-sm btn-warning"> Edit </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Lowongan</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASE_URL ?>/lowongan/store" method="POST">

                                <div class="form-group mb-3">
                                    <label for="name">Nama Lowongan / Posisi</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lowongan / Posisi">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="company">Perusahaan</label>
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Nama Perusahaan">
                                </div>

                                <label for="category_id">Kategori</label>
                                <select class="form-select mb-3" id="category_id" name="category_id">

                                    <?php foreach ($data['kategori'] as $k) : ?>
                                        <option value="<?= $k['id'] ?>"><?= $k['name'] ?></option>
                                    <?php endforeach; ?>

                                </select>

                                <label for="type">Tipe</label>
                                <select class="form-select mb-3" id="type" name="type">
                                    <option value="Full-time">Full-time</option>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Internship">Internship</option>
                                </select>

                                <div class="form-group mb-3">
                                    <label for="form_link">Link Form Lamaran</label>
                                    <input type="text" class="form-control" id="form_link" name="form_link" placeholder="Link Form">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">Deskripsi</textarea>
                                </div>

                                <div class="w-100 d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
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