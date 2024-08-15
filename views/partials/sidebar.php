<div class="w-48 h-dvh bg-[#303952] flex flex-col justify-center items-center gap-16 px-4 py-16 shadow-xl shadow-inner">
    <div class="flex flex-col items-center justify-center gap-3">
        <div class="w-16 h-16 rounded-md bg-white flex items-center justify-center text-3xl">
            <i class="bi bi-sticky-fill text-[#303952]"></i>
        </div>
        <h2 class="text-white text-xl">Note.ly</h2>
    </div>
    <ul class="w-full h-8 grow flex flex-col gap-2">
        <li>
            <a href="/" class="<?php echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-blue-900/75 text-white' : 'bg-blue-900/25 text-white/80' ?> w-full h-8 px-3 gap-2 bg-blue-900/25 rounded-sm hover:bg-blue-900/50 hover:cursor-pointer hover:text-white/90 flex items-center justify-center shadow-sm hover:shadow-md">
                <i class="bi bi-house-door-fill"></i>
                <p class="grow">Home</p>
            </a>
        </li>
        <?php if ($_SESSION['user'] ?? false) : ?>
            <li>
                <a href="/notes" class="<?php echo $_SERVER['REQUEST_URI'] === '/notes' ? 'bg-blue-900/75 text-white' : 'bg-blue-950/25 text-white/80' ?> w-full h-8 px-3 gap-2 rounded-sm hover:bg-blue-950/50 hover:cursor-pointer hover:text-white/90 flex items-center justify-center shadow-sm hover:shadow-md">
                    <i class="bi bi-file-text-fill"></i>
                    <p class="grow">My Notes</p>
                </a>
            </li>
        <?php endif ?>
    </ul>
    <div class="flex items-center justify-between gap-3">
        <?php if ($_SESSION['user'] ?? false) : ?>
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-xl">
                <i class="bi bi-person-fill"></i>
            </div>
            <form method="POST" action="/session" class="flex items-center justify-center text-xl text-red-500 hover:text-red-400 cursor-pointer">
                <input type="hidden" name="_method" value="DELETE" />
                <button><i class="bi bi-box-arrow-left"></i></button>
            </form>
        <?php else : ?>
            <ul class="w-full h-8 grow flex flex-col gap-2">
                <li>
                    <a href="/login" class="<?php echo $_SERVER['REQUEST_URI'] === '/login' ? 'bg-blue-900/75 text-white' : 'bg-blue-950/25 text-white/80' ?> w-full h-8 px-3 gap-2 bg-blue-900/25 rounded-sm hover:bg-blue-900/50 hover:cursor-pointer hover:text-white/90 flex items-center justify-center shadow-sm hover:shadow-md">
                        <i class="bi bi-person-fill"></i>
                        <p class="grow">Login</p>
                    </a>
                </li>
                <li>
                    <a href="/register" class="<?php echo $_SERVER['REQUEST_URI'] === '/register' ? 'bg-blue-900/75 text-white' : 'bg-blue-950/25 text-white/80' ?> w-full h-8 px-3 gap-2 rounded-sm hover:bg-blue-950/50 hover:cursor-pointer hover:text-white/90 flex items-center justify-center shadow-sm hover:shadow-md">
                        <i class="bi bi-person-fill-add"></i>
                        <p class="grow">Register</p>
                    </a>
                </li>
            </ul>
        <?php endif; ?>
    </div>

</div>