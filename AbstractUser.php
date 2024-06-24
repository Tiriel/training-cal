<?php

abstract class AbstractUser implements AuthInterface
{
    use ToStringTrait;

    protected static int $count = 0;

    public function __construct(
        string $name,
        protected string $login,
        protected string $password,
        protected int $age,
    ) {
        $this->name = $name;
        static::$count++;
    }

    public function __destruct()
    {
        static::$count--;
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): AbstractUser
    {
        $this->name = $name;

        return $this;
    }

    public static function count(): int
    {
        return static::$count;
    }

    abstract public function auth(string $login, string $password): bool;
}
