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
            <div class="flex flex-warp px-4 mb-56 justify-center">
                <div class="w-full self-center">
                    <h1 class="font-extrabold text-slate-900 mb-6 text-4xl flex justify-center w-full text-center">
                        Daftar
                    </h1>
                    <form action="<?= BASE_URL ?>/auth/store" method="POST" class="flex flex-col justify-center align-middle mt-10">
                        <div class="block w-full lg:w-1/2 xl:w-1/3 mx-auto">
                            <label for="name" class="text-base text-teal-500 font-semibold">Nama</label>
                            <input type="text" id="name" name="name" class="w-full mt-2 block bg-slate-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-tal-500 focus:ring-1 focus:border-teal-500" placeholder="Nama" />
                        </div>
                        <div class="block w-full lg:w-1/2 xl:w-1/3 mt-5 mx-auto">
                            <label for="email" class="text-base text-teal-500 font-semibold">Email</label>
                            <input type="email" id="email" name="email" class="w-full mt-2 block bg-slate-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-tal-500 focus:ring-1 focus:border-teal-500" placeholder="Email" />
                        </div>
                        <div class="block w-full lg:w-1/2 xl:w-1/3 mt-5 mx-auto">
                            <label for="password" class="text-base text-teal-500 font-semibold">Password</label>
                            <input type="password" id="password" name="password" class="w-full mt-2 block bg-slate-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-tal-500 focus:ring-1 focus:border-teal-500" placeholder="Password" />
                        </div>
                        <button type="submit" class="mx-auto w-full lg:w-1/2 xl:w-1/3 text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80 mt-10">
                            Daftar
                        </button>
                    </form>
                    <p class="text-slate-500 mb-6 flex justify-center w-full text-center mt-10">
                        Sudah punya akun? <a href="<?= BASE_URL ?>/auth/login" class="text-teal-500">&nbsp; Masuk Disini</a>
                    </p>
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