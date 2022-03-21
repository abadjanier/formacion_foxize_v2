<?php


namespace App\Backoffice\Curriculums\Domain;


use RuntimeException;
use Throwable;

class NegativeValueExeption extends RuntimeException
{

    public function __construct($message = "Value must be greater than zero", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}