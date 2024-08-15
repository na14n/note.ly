<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<main class="w-full h-dvh flex flex-col">
    <?php require base_path('views/partials/banner.php') ?>
    <a href="/notes" class="ml-16 mb-4 w-fit opacity-80 hover:opacity-100">
        <i class="bi bi-arrow-left"></i>
        Return
    </a>
    <form class="h-full w-fit mx-16 mb-16 p-4 flex flex-col" action="/notes" method="POST">
        <textarea class="w-[75ch] h-full test p-2 resize-none bg-white rounded-md border-1 border-black/25" name="body"
            placeholder="Here's an idea for a note..."><?= $_POST['body'] ?? '' ?></textarea>
        <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
        <?php endif; ?>
        <div class="flex gap-4 justify-end items-center mt-8">
            <a href="/notes"
                class="w-fit p-2 hover:bg-red-700 rounded-md text-red-700 hover:text-red-50 shadow-md shadow-red-50/0 hover:shadow-red-500">
                Cancel
            </a>
            <button
                class="place-self-end w-fit p-2 rounded-md shadow-md bg-white font-medium hover:text-blue-500">Create</button>
        </div>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>