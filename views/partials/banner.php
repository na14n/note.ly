<div class="w-full h-24 flex justify-between p-8">
    <h2 class="text-3xl font-bold capitalize tracking-wide">
        <?= $heading ?>
    </h2>
    <?php if ($_SESSION['user'] ?? false) : ?>
        <button class="bg-white p-2 rounded-md shadow-md flex justify-center items-center hover:shadow-xl hover:text-blue-700">
            <i class="bi bi-bell-fill"></i>
        </button>
    <?php endif ?>
</div>