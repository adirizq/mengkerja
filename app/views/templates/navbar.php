<!-- Navbar Start -->

<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="<?= BASE_URL ?>" class="font-bold text-lg text-slate-900 block py-6">
                    MENG<span class="text-teal-500">KERJA</span>
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg w-full right-4 max-w-[250px] top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group ">
                            <a href="<?= BASE_URL ?>" class="text-base <?= $data['page'] == 'home' ? 'pointer-events-none text-teal-500' : 'text-slate-900' ?> py-2 mx-8 flex group-hover:text-teal-500">Beranda</a>
                        </li>
                        <li class="group ">
                            <a href="<?= BASE_URL ?>/lowongan" class="text-base <?= $data['page'] == 'lowongan' ? 'pointer-events-none text-teal-500' : 'text-slate-900' ?> py-2 mx-8 flex group-hover:text-teal-500">Lowongan</a>
                        </li>

                        <?php

                        if (isset($_SESSION['user'])) {
                            if ($_SESSION['user']['is_admin'] == 1) {
                                echo '<li class="group ">
                                    <a href=" ' . BASE_URL . '/lowongan/dashboard" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-teal-500">Dashboard</a>
                                </li>';
                            }

                            echo '<li class="group ">
                                <a href=" ' . BASE_URL . '/auth/logout" class="text-base font-semibold text-white bg-red-500 py-2 px-4 rounded-md hover:shadow-lg hover:opacity-80 mx-8 flex">Keluar</a>
                            </li>';
                        } else {
                            echo '<li class="group ">
                                <a href=" ' . BASE_URL . '/auth/login" class="text-base font-semibold text-white bg-teal-500 py-2 px-4 rounded-md hover:shadow-lg hover:opacity-80 mx-8 flex">Masuk</a>
                            </li>';
                        }

                        ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Navbar End -->