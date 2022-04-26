<?php
namespace Exceptions;

use PhpExceptions\User;

class UserExceptions extends \Exception {

    public static function notAllowed(User $user)
    {
        return new static("Sorry you're not allowed to send email to this user ". $user->getName());
    }

}
