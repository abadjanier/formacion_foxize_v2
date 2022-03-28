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
     * @var CurriculumUuid|null
     */
    private $uuid;

    /**
     * @var CurriculumName
     */
    private $name;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Job[]|iterable|null
     */
    private $jobs;

    /**
     * @var DateTime
     */
    private $creation_date;

    private function __construct(?CurriculumUuid $uuid = null)
    {
        $this->uuid = $uuid??CurriculumUuid::random();
        $this->creation_date = new DateTime();
    }

    public static function create(?CurriculumUuid $uuid, CurriculumName $curriculumName, User $user, iterable $jobs = []):Curriculum
    {
        $self = new static($uuid);
        $self->setName($curriculumName);
        $self->setUser($user);
        $self->setJobs($jobs);
        return $self;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return CurriculumUuid|null
     */
    public function getUuid(): CurriculumUuid|null
    {
        return $this->uuid;
    }

    /**
     * @param CurriculumUuid|null $uuid
     */
    public function setUuid(CurriculumUuid|null $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return CurriculumName
     */
    public function getName(): CurriculumName
    {
        return $this->name;
    }

    /**
     * @param CurriculumName $name
     */
    public function setName(CurriculumName $name): void
    {
        $this->name = $name;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Job[]|iterable|null
     */
    public function getJobs(): iterable
    {
        return $this->jobs;
    }

    /**
     * @param Job[]|iterable|null $jobs
     */
    public function setJobs(iterable $jobs): void
    {
        $this->jobs = $jobs;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate(): DateTime
    {
        return $this->creation_date;
    }

    /**
     * @param DateTime $creation_date
     */
    public function setCreationDate(DateTime $creation_date): void
    {
        $this->creation_date = $creation_date;
    }



}