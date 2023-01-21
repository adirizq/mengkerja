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
                            <h3>Pengguna</h3>
                            <p class="text-subtitle text-muted">
                                Page untuk manajemen data pengguna
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Data Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['pengguna'] as $p) : ?>
                                        <tr>
                                            <td><?= $p['name'] ?></td>
                                            <td><?= $p['email'] ?></td>

                                            <?php
                                            if ($p['is_admin'] == 1) {
                                                echo '<td><span class="badge bg-success">Admin</span></td>';
                                            } else {
                                                echo '<td><span class="badge bg-secondary">User</span></td>';
                                            }
                                            ?>

                                            <td>
                                                <a href="<?= BASE_URL ?>/pengguna/destroy/<?= $p['id'] ?>" class="btn btn-sm btn-danger"> Hapus </a>

                                                <?php

                                                if ($p['is_admin'] != 1) {
                                                    echo '<a href="' . BASE_URL . '/pengguna/promote/' . $p['id'] . ' " class="btn btn-sm btn-warning"> Jadikan Admin </a>';
                                                }

                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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