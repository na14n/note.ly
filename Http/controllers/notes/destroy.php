<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === get_uid());

$db->query('DELETE from notes where id = :id', [
    'id' => $_POST['id'],
]);

header('location: /notes');
exit();
