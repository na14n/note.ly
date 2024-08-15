<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<main class="w-full h-dvh flex flex-col">
    <?php require base_path('views/partials/banner.php') ?>
    <div class="flex items-center justify-between mx-16 mb-4 px-4">
        <a href="/notes" class="w-fit opacity-80 hover:opacity-100">
            <i class="bi bi-arrow-left"></i>
            Return
        </a>
        <div class="flex items-center justify-center gap-3">
            <a href="/notes/<?= $note['id'] ?>/edit"
                class="w-fit opacity-80 hover:opacity-100 hover:text-emerald-700">
                <i class="bi bi-pencil"></i>
                Edit
            </a>
            <form action="/notes/<?= $note['id'] ?>" method="POST" class="w-fit">
                <input type="hidden" name="_method" value="DELETE" />
                <input type="hidden" name="id" value="<?= $note['id'] ?>" />
                <button class="w-fit opacity-80 hover:text-red-700 hover:opacity-100">
                    <i class="bi bi-trash-fill"></i>
                    Delete
                </button>
            </form>
        </div>
    </div>
    <p class="h-full mx-16 mb-16 p-4 bg-white rounded-md border-1 border-black/25">
        <?= htmlspecialchars($note['body']) ?>
    </p>
</main>

<?php require base_path('views/partials/footer.php') ?>