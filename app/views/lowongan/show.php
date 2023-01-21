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
            <div class="flex flex-warp px-4 mb-56">
                <div class="w-full self-center">
                    <h1 class="font-extrabold text-slate-900 mb-6 text-4xl flex w-full">
                        <?php echo $data['lowongan']['name'] ?>
                    </h1>
                    <div class="mb-6 flex w-full">
                        <p class="text-slate-500 w-full text-2xl">
                            <?php echo $data['lowongan']['company'] ?>
                        </p>
                    </div>
                    <div class="mb-10 flex w-full">
                        <span class="bg-purple-600/20 rounded-md text-purple-900 px-2 py-1 uppercase mr-3 font-semibold"><?php echo $data['lowongan']['c_name'] ?></span>
                        <span class="bg-orange-600/20 rounded-md text-orange-900 px-2 py-1 uppercase font-semibold"><?php echo $data['lowongan']['type'] ?></span>
                    </div>
                    <div class="mb-10 w-full">
                        <p class="text-slate-900 w-full">Deskripsi</p>
                        <p class="text-slate-500 w-full"><?php echo $data['lowongan']['description']  ?></p>
                    </div>
                    <a href="<?php echo $data['lowongan']['form_link'] ?>" class="text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80">
                        Apply
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Lowongan End -->


    <?php

    include('app/views/templates/script.php')

    ?>
</body>

</html>