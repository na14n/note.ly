<?php

view('index.view.php', [
    'heading' => isset($_SESSION['user']) ? "Welcome {$_SESSION['user']['name']}" : 'home',
]);
