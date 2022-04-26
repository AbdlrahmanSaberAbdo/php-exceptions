<?php


use Exceptions\UserExceptions;
use PhpExceptions\Email;
use PhpExceptions\User;

/**
 * Class UserTest
 */
class UserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws \Exceptions\UserExceptions
     */
    public function testUserCaseNotAllowed()
    {
        $this->expectException(UserExceptions::class);
        $user = new User('Abdlrahman', 0);
        $email = new Email();

        $email->send($user);
    }

    /**
     * @throws UserExceptions
     */
    public function testUserCaseAllowed()
    {
        $user  = new User('Abdlrahman', 1);
        $email = new Email();
        $send  = $email->send($user);

        $this->assertEquals("Sent successfully", $send);
    }
}

