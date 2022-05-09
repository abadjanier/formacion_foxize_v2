<?php


namespace App\Backoffice\Users\Infrastructure\Persistence;


use App\Backoffice\Users\Domain\User;
use App\Backoffice\Users\Domain\UserRepository;
use Doctrine\ORM\EntityManager;

class DoctrineUserRepository implements UserRepository
{

    /**
     * @var EntityManager
     */
    private EntityManager $em;

    /**
     * DoctrineUserRepository constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function byId(int $id):User
    {
        return $this->em->getRepository(User::class)->find($id);
    }

    public function save(User $user): void
    {
        $this->em->persist($user);
        $this->em->flush();
    }


}