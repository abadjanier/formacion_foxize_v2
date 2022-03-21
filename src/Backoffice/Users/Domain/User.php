<?php


namespace App\Backoffice\Users\Domain;


use App\Backoffice\Curriculums\Domain\Curriculum;

class User
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var UserName
     */
    private $name;

    /**
     * @var UserUsername
     */
    private $surname;

    /**
     * @var UserEmail
     */
    private $email;

    /**
     * @var Curriculum[]|iterable
     */
    private $curriculums;

}