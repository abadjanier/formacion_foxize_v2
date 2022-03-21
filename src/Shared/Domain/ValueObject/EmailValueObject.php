<?php


namespace App\Shared\Domain\ValueObject;


abstract class EmailValueObject
{
    protected $value;

    public function __construct(string $value)
    {
        $this->ensureValidEmail($value);
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function isEmpty(): bool
    {
        return empty($this->value());
    }

    private function ensureValidEmail(string $value):void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL))
            throw new EmailNotValidException();
    }
}