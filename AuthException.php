<?php

class AuthException extends \InvalidArgumentException
{
    public function __construct(string $login)
    {
        parent::__construct(sprintf("Invalid login or credentials for login %s", $login));
    }
}
