<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class RegisterForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if (!Validator::string($attributes['name'], 3, 16)) {
            $this->errors['email'] = 'Please provide a name with at least 3 characters and a maximum of 16 characters.';
        }
        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($attributes['password'], 7, 255)) {
            $this->errors['password'] = 'Please provide a password with at least seven characters.';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        // dd($instance->throw());

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        // dd($this->errors());
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors());
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }
}
