<?php require 'partials/head.php' ?>
<?php require 'partials/sidebar.php' ?>
<?php $heading = 'Error 404 :(' ?>


<main class="w-full h-dvh flex flex-col">
    <?php require 'partials/banner.php' ?>
    <div class="m-16 grow flex items-center justify-center flex-col gap-2">
        <h1 class="text-2xl font-bold">Sorry but the resource you want is not Found.</h1>
        <a href="/"class="text-blue-700 hover:underline">Return to Home</a>
    </div>
</main>

<?php require 'partials/footer.php' ?>