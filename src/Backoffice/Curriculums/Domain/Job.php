<?php


namespace App\Backoffice\Curriculums\Domain;


use App\Backoffice\Companies\Domain\Company;
use DateTime;

class Job
{

    private int $id;

    private JobUuid $uuid;

    private Company $company;

    private JobPosition $position;

    private JobDescription $description;

    private DateTime $init_date;

    private DateTime|null $end_date;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return JobUuid
     */
    public function getUuid(): JobUuid
    {
        return $this->uuid;
    }

    /**
     * @param JobUuid $uuid
     */
    public function setUuid(JobUuid $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @return JobPosition
     */
    public function getPosition(): JobPosition
    {
        return $this->position;
    }

    /**
     * @param JobPosition $position
     */
    public function setPosition(JobPosition $position): void
    {
        $this->position = $position;
    }

    /**
     * @return JobDescription
     */
    public function getDescription(): JobDescription
    {
        return $this->description;
    }

    /**
     * @param JobDescription $description
     */
    public function setDescription(JobDescription $description): void
    {
        $this->description = $description;
    }

    /**
     * @return DateTime
     */
    public function getInitDate(): DateTime
    {
        return $this->init_date;
    }

    /**
     * @param DateTime $init_date
     */
    public function setInitDate(DateTime $init_date): void
    {
        $this->init_date = $init_date;
    }

    /**
     * @return DateTime|null
     */
    public function getEndDate(): ?DateTime
    {
        return $this->end_date;
    }

    /**
     * @param DateTime|null $end_date
     */
    public function setEndDate(?DateTime $end_date): void
    {
        $this->end_date = $end_date;
    }



}