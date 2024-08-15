<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

// Checking if Form Input are Valid

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

// Attempt to Sign In

$signedIn = (new Authenticator)->attempt(
    $attributes['email'],
    $attributes['password']
);

if (!$signedIn) {
    // Function that throws an error message
    $form->error(
        'password',
        'No matching account found for that email address or password.'
    )->throw();
}

redirect('/');
