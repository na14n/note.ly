<?php

$router->get('/', 'index.php');

// List Notes
$router->get('/notes', 'notes/index.php')->only('auth');
// Add new Note
$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');
// Show, Update, and Delete existing Note
$router->get('/notes/{id}', 'notes/show.php');
$router->delete('/notes/{id}', 'notes/destroy.php'); 
$router->get('/notes/{id}/edit', 'notes/edit.php');
$router->patch('/notes/{id}', 'notes/update.php');

$router->get('/register', 'register/create.php')->only('guest');
$router->post('/register', 'register/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');
