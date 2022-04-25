<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Doctrine;

interface DoctrineCustomType
{
    public static function customTypeName(): string;
}
