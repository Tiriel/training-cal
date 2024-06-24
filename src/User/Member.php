<?php

namespace App\User;

use App\Auth\Exception\AuthException;

class Member extends AbstractUser
{
    protected static int $count = 0;

    public function auth(string $login, string $password): bool
    {
        if ($login !== $this->login || $password !== $this->password) {
            throw new AuthException($login);
        }

        return true;
    }
}
