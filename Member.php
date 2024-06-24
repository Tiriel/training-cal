<?php

class Member extends AbstractUser
{
    protected static int $count = 0;

    public function auth(string $login, string $password): bool
    {
        return $login === $this->login
            && $password === $this->password;
    }
}
