<?php

enum AdminLevel
{
    case Admin;
    case SuperAdmin;

    public function getLabel(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::SuperAdmin => 'SuperAdmin',
        };
    }
}