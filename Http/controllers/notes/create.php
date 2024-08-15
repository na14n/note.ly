<?php

use Core\Session;

view('notes/create.view.php', [
    'heading' => 'Create a new Note',
    'errors' => Session::get('errors') ?? []
]);