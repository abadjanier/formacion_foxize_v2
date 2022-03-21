<?php


namespace App\Shared\Domain\ValueObject;


abstract class IntegerValueObject
{
    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public function isEmpty(): bool
    {
        return empty($this->value());
    }
}