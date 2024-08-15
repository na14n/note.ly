<?php
$page_styles = [
    '/styles/test.css'
]; ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<main class="w-full h-dvh flex flex-col">
    <?php require base_path('views/partials/banner.php') ?>
    <ul class="w-full grow flex flex-wrap gap-2 p-8">
        <?php foreach ($notes as $note): ?>
            <li>
                <a href="/notes/<?= $note['id'] ?>"
                    class="w-fit h-fit px-2 py-1 bg-white shadow-md rounded-md hover:text-blue-500">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
        <li>
            <a href="/notes/create"
                class="w-fit h-fit px-2 py-1 bg-blue-500 hover:bg-white shadow-md rounded-md text-blue-50 hover:text-blue-500 hover:shadow-blue-500">
                Create new note
            </a>
        </li>
    </ul>
</main>

<?php require base_path('views/partials/footer.php') ?>