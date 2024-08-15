<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<main class="w-full h-dvh flex flex-col items-center justify-center">
    <div class="flex items-center justify-center gap-3">
        <div class="w-16 h-16 rounded-md bg-[#303952] flex items-center justify-center text-3xl">
            <i class="bi bi-sticky-fill text-[#fff]"></i>
        </div>
        <h2 class="text-[#303952] text-3xl font-medium">Note.ly</h2>
    </div>
    <form action="/register" method="POST" class="w-[50ch] mt-4 flex flex-col items-center justify-center">
        <h4 class="text-black/80 font-black text-2xl">Register for a new Account</h4>

        <input type="text" name="name" required placeholder="Your Name" value="<?= $name ?? '' ?>" class="mt-8 w-full rounded-t-md shadow-inner border border-gray-500 p-2 focus:outline-none focus:ring-0 focus:border-gray-500 active:outline-none" />
        <input type="email" name="email" required placeholder="your@email.com" value="<?= $email ?? '' ?>" class="w-full shadow-inner border border-gray-500 p-2 focus:outline-none focus:ring-0 focus:border-gray-500 active:outline-none" />
        <input type="password" name="password" required placeholder="Your Password" class="w-full rounded-b-md shadow-inner border border-gray-500 p-2 focus:outline-none focus:ring-0 focus:border-gray-500 active:outline-none" />

        <?php if (isset($errors['name'])): ?>
            <p class="w-full text-red-500 text-xs mt-3"><?= $errors['name'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['email'])): ?>
            <p class="w-full text-red-500 text-xs mt-1"><?= $errors['email'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['password'])): ?>
            <p class="w-full text-red-500 text-xs mt-1"><?= $errors['password'] ?></p>
        <?php endif; ?>

        <button class="w-full p-2 font-bold mt-4 bg-[#303952] text-blue-50 rounded-md shadow hover:bg-[#303952]/90">Register Now</button>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>