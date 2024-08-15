<?php

use Core\Database;
use Core\Authenticator;
use Core\App;
use Http\Forms\RegisterForm;


$form = RegisterForm::validate($attributes = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

// Search if there is an existing email
$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $attributes['email'],
])->find();

// If there is an existing email, show an error

if ($user) {
    $form->error(
        'email',
        'This email is already in use.'
    )->throw();
}

// Else; save the user data
// Make sure to hash the password first
$hashedPw = password_hash($attributes['password'], PASSWORD_BCRYPT, ['cost' => 12]);

$db->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)
', [
    'name' => $attributes['name'],
    'email' => $attributes['email'],
    'password' => $hashedPw,
]);

// Log the user in

$signedIn = (new Authenticator)->attempt(
    $attributes['email'],
    $attributes['password']
);

if (!$signedIn) {
    $form->error(
        'password',
        'No matching account found for that email address or password.'
    )->throw();
}

redirect('/');
