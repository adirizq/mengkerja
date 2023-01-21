<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="<?= BASE_URL ?>">MENGKERJA</a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item <?= $data['page'] == 'lowongan' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>/lowongan/dashboard" class="sidebar-link">
                        <i class="bi bi-briefcase-fill"></i>
                        <span>Lowongan</span>
                    </a>
                </li>

                <li class="sidebar-item <?= $data['page'] == 'kategori' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>/kategori/dashboard" class="sidebar-link">
                        <i class="bi bi-tags-fill"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                <li class="sidebar-item <?= $data['page'] == 'pengguna' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>/pengguna/dashboard" class="sidebar-link">
                        <i class="bi bi-person-fill"></i>
                        <span>Pengguna</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="<?= BASE_URL ?>/auth/logout" class="sidebar-link">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Keluar</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>