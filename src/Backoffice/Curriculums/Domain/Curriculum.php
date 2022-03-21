<?php


namespace App\Backoffice\Curriculums\Domain;


use App\Backoffice\Users\Domain\User;
use DateTime;

class Curriculum
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var CurriculumName
     */
    private $name;

    /**
     * @var User
     */
    private $user;

    /**
     * @var DateTime
     */
    private $creation_date;

}