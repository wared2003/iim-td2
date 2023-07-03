<?php

declare(strict_types=1);

namespace Iim\td2;

Class Api
{
    public function __construct()
    {
        echo $this->getRandomNumber();
    }

    public function getRandomNumber(): int
    {
        return random_int(0, 100);
    }
}
