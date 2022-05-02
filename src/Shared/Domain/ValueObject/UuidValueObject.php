<?php


namespace App\Shared\Domain\ValueObject;


use Ramsey\Uuid\Uuid as RamseyUuid;
use RuntimeException;

class UuidValueObject
{
    protected $value;

    public function __construct(string $value)
    {
        $this->ensureIsValidUuid($value);
        $this->value = $value;
    }

    public static function random(): self
    {
        return new static(RamseyUuid::uuid4()->toString());
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(UuidValueObject $other): bool
    {
        return $this->value() === $other->value();
    }

    public function __toString(): string
    {
        return $this->value();
    }

    private function ensureIsValidUuid(string $id): void
    {
        if (!RamseyUuid::isValid($id)) {
            throw new RuntimeException(sprintf('<%s> does not allow the value <%s>.', static::class, $id));
        }
    }
}