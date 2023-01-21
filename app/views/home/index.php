<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include('app/views/templates/header.php')

    ?>
</head>

<body>

    <?php

    include('app/views/templates/navbar.php')

    ?>

    <!-- Hero Start -->

    <section id="hero" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h2 class="w-auto mb-5">
                        <span class="border-2 px-4 text-xs py-2 border-teal-500 text-teal-500 rounded-md font-semibold">
                            PLATFORM TERPERCAYA
                        </span>
                    </h2>
                    <h1 class="block font-bold text-slate-900 text-4xl mb-5 lg:text-5xl lg:mr-10">
                        Kembangkan Karirmu Bersama Meng<span class="text-teal-500">Kerja</span>.
                    </h1>
                    <p class="text-slate-500 mb-10">
                        Kesuksesanmu berada digenggamanmu sendiri. Kami akan bantu kamu mencari pekerjaan
                        impianmu. Bersama platform lowongan terpercaya MengKerja.
                    </p>
                    <a href="<?= BASE_URL ?>/lowongan" class="text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80">
                        Cari Kerja
                    </a>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2"">
                    <div class=" relative mt-10 lg:mt-9 lg:right-0">
                    <img src="<?= BASE_URL ?>/public/images/hero.svg" alt="hero" class="max-w-full xl:w-1/2 mx-auto lg:float-right lg:mx-0">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Hero End -->


    <!-- Company Start -->

    <section id="company" class="pt-24">
        <div class="container">
            <div class="flex flex-wrap px-4">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 w-full justify-items-center">
                    <div class="border-2 px-6 md:px-8 xl:px-16 text-base py-6 border-slate-100 text-teal-500 rounded-md font-semibold flex items-center hover:scale-105 transition duration-300 ease-in-out">
                        <img src="<?= BASE_URL ?>/public/images/bumn.png">
                    </div>
                    <div class="border-2 px-6 md:px-8 xl:px-16 text-base py-6 border-slate-100 text-teal-500 rounded-md font-semibold flex items-center hover:scale-105 transition duration-300 ease-in-out">
                        <img src="<?= BASE_URL ?>/public/images/microsoft.png">
                    </div>
                    <div class="border-2 px-6 md:px-8 xl:px-16 text-base py-6 border-slate-100 text-teal-500 rounded-md font-semibold flex items-center hover:scale-105 transition duration-300 ease-in-out">
                        <img src="<?= BASE_URL ?>/public/images/indofood.png">
                    </div>
                    <div class="border-2 px-6 md:px-8 xl:px-16 text-base py-6 border-slate-100 text-teal-500 rounded-md font-semibold flex items-center hover:scale-105 transition duration-300 ease-in-out">
                        <img src="<?= BASE_URL ?>/public/images/google.png">
                    </div>
                    <div class="border-2 px-6 md:px-8 xl:px-16 text-base py-6 border-slate-100 text-teal-500 rounded-md font-semibold flex items-center hover:scale-105 transition duration-300 ease-in-out">
                        <img src="<?= BASE_URL ?>/public/images/goto.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company End -->


    <!-- Lowongan Start -->

    <section id="company" class="pt-36">
        <div class="container">
            <div class="flex flex-warp px-4 mb-12">
                <div class="w-full self-center">
                    <h2 class="mb-6 mx-auto flex justify-center">
                        <span class="border-2 px-4 text-xs py-2 border-teal-500 text-teal-500 rounded-md font-semibold">
                            HIRING NOW
                        </span>
                    </h2>
                    <h1 class="font-extrabold text-slate-900 mb-6 text-4xl flex justify-center text-center">
                        Lowongan Pekerjaan Terbaru
                    </h1>
                    <div class="mb-10 flex justify-center w-100">
                        <p class="text-slate-500 text-center md:w-1/2">
                            Mencari pekerjaan sekarang lebih mudah menggunakan MengKerja. Tinggal cari dan apply pekerjaan yang kamu inginkan. Mereka semua membutuhkan skill kamu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap px-4 lg:px-48 ">
                <div class="grid grid-cols-2 gap-8 w-full justify-items-center">
                    <?php foreach ($data['lowongan'] as $l) : ?>
                        <a href="<?= BASE_URL ?>/lowongan/show/<?= $l['id'] ?>" class="w-full border-2 px-6 py-6 text-base border-slate-100 text-teal-500 rounded-md font-semibold hover:scale-105 transition duration-300 ease-in-out">
                            <h4 class="text-slate-900 text-2xl"><?= $l['name'] ?></h4>
                            <h6 class="font-normal text-slate-500"><?= $l['company'] ?></h6>
                            <br>
                            <span class="bg-purple-600/20 rounded-md text-purple-900 px-2 py-1 text-xs uppercase"><?= $l['c_name'] ?></span>
                            <span class="bg-orange-600/20 rounded-md text-orange-900 px-2 py-1 text-xs uppercase"><?= $l['type'] ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex px-4 mb-32 mt-12">
                <a href="<?= BASE_URL ?>/lowongan" class="mx-auto text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80">
                    Lihat Semua Lowongan
                </a>
            </div>
        </div>
    </section>

    <!-- Lowongan End -->

    <?php

    include('app/views/templates/footer.php')

    ?>


    <?php

    include('app/views/templates/script.php')

    ?>
</body>

</html>