<?php

use Core\Database;
use Core\App;


$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $params['id'] ?? null
])->findOrFail();

authorize($note['user_id'] === get_uid());

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);




