<?php


namespace App\Backoffice\Curriculums\Domain;


use App\Shared\Domain\ValueObject\IntegerValueObject;

class SkillScore extends IntegerValueObject
{

    public function __construct(int $value)
    {
        $this->ensureIsPositiveValue($value);
        parent::__construct($value);
    }

    private function ensureIsPositiveValue($value)
    {
        if ($value <= 0)
            throw new NegativeValueExeption();
    }

}