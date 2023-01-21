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

    <!-- Lowongan Start -->

    <section id="company" class="pt-36">
        <div class="container">
            <div class="flex flex-warp px-4 mb-12">
                <div class="w-full self-center">
                    <h1 class="font-extrabold text-slate-900 mb-6 text-4xl flex justify-center text-center">
                        Lowongan Pekerjaan
                    </h1>
                    <div class="mb-10 flex justify-center w-100">
                        <p class="text-slate-500 text-center md:w-1/2">
                            Mencari pekerjaan sekarang lebih mudah menggunakan MengKerja. Tinggal cari dan apply pekerjaan yang kamu inginkan. Mereka semua membutuhkan skill kamu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-warp px-4 mb-12 lg:px-48 justify-center">
                <form action="<?= BASE_URL ?>/lowongan" method="POST" class="w-full flex flex-warp">
                    <input type="text" id="keyword" name="keyword" class="w-full mr-2 lg:mr-5 bg-slate-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-tal-500 focus:ring-1 focus:border-teal-500" placeholder="Cari Lowongan" />
                    <select name="category_id" id="category_id" class="w-full mx-2 lg:mx-5 bg-slate-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-tal-500 focus:ring-1 focus:border-teal-500">
                        <option selected disabled hidden>Pilih Kategori</option>
                        <?php foreach ($data['kategori'] as $k) : ?>
                            <option value="<?= $k['id'] ?>"><?= $k['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="ml-2 lg:ml-5 text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80">
                        Cari
                    </button>
                </form>
            </div>
            <div class=" flex flex-wrap px-4 lg:px-48 ">
                <div class=" grid grid-cols-1 md:grid-cols-2 gap-8 w-full justify-items-center">
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