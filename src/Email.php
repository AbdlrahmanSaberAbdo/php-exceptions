<?php


namespace PhpExceptions;


use Exceptions\UserExceptions;

class Email
{
    /**
     * @throws UserExceptions
     */
    public function send(User $user)
    {
        if(!$user->getIsAlowed()) {
            throw UserExceptions::notAllowed($user);
        }

        return 'Sent successfully';
    }
}
