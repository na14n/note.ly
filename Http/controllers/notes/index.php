<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$notes = [];

$notes = $db->query('select * from notes where user_id = :user_id', [
    'user_id' => get_uid(),
])->get();


view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);

