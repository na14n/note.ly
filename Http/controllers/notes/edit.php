<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $params['id'] ?? null
])->findOrFail();

authorize($note['user_id'] === get_uid());

view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'errors' => Session::get('errors') ?? [],
    'note' => $note,
]);

