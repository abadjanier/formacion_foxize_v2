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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return UserName
     */
    public function getName(): UserName
    {
        return $this->name;
    }

    /**
     * @param UserName $name
     * @return User
     */
    public function setName(UserName $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return UserUsername
     */
    public function getSurname(): UserUsername
    {
        return $this->surname;
    }

    /**
     * @param UserUsername $surname
     * @return User
     */
    public function setSurname(UserUsername $surname): User
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return UserEmail
     */
    public function getEmail(): UserEmail
    {
        return $this->email;
    }

    /**
     * @param UserEmail $email
     * @return User
     */
    public function setEmail(UserEmail $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Curriculum[]|iterable
     */
    public function getCurriculums(): iterable
    {
        return $this->curriculums;
    }

    /**
     * @param Curriculum[]|iterable $curriculums
     * @return User
     */
    public function setCurriculums(... $curriculums): User
    {
        $this->curriculums = $curriculums;
        return $this;
    }

    /**
     * @param Curriculum $cv
     * @return User
     */
    public function addCV(Curriculum $cv): User
    {
        $this->setCurriculums($cv);
        return $this;
    }



}