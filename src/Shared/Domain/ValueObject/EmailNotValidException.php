<?php


namespace App\Shared\Domain\ValueObject;


use RuntimeException;
use Throwable;

class EmailNotValidException extends RuntimeException
{

    public function __construct($message = "Email not valid.", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}