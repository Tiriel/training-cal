<?php

namespace App\Vehicle;

use App\Tools\ToStringTrait;

abstract class Vehicle
{
    use ToStringTrait;

    public function __construct(
        string $name,
        protected string $make,
        protected string $model,
    ) {
        $this->name = $name;
    }
}
