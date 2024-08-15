<?php

use Core\Database;
use Core\App;
use Http\Forms\NoteForm;

$db = App::resolve(Database::class);

$form = NoteForm::validate($attributes = [
    'body' => $_POST['body'],
]);

$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => get_uid(),
]);

redirect('/notes');
