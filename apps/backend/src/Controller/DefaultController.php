<?php


namespace App\Backend\Controller;


use App\Backoffice\Curriculums\Domain\Curriculum;
use App\Backoffice\Curriculums\Domain\CurriculumName;
use App\Backoffice\Curriculums\Domain\CurriculumUuid;
use App\Backoffice\Users\Domain\User;
use App\Backoffice\Users\Domain\UserEmail;
use App\Backoffice\Users\Domain\UserName;
use App\Backoffice\Users\Domain\UserRepository;
use App\Backoffice\Users\Domain\UserUsername;
use App\Shared\Domain\ValueObject\UuidValueObject;
use App\Shared\Infrastructure\Doctrine\MysqlSchemaSQL;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/{id}",name="index_default_controller")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param MysqlSchemaSQL $mysqlSchemaSQL
     * @param EntityManager $entityManager
     * @return Response
     */
    public function __invoke(Request $request, UserRepository $userRepository, MysqlSchemaSQL $mysqlSchemaSQL, EntityManager $entityManager,  $id)
    {

        /**
         * @var  User $user
         */
        $user = $userRepository->byId(1);

        $user->addCV((new Curriculum(new CurriculumUuid(UuidValueObject::random())))->setName(new CurriculumName("Nuevo nombre de usuario {$user->getName()->value()}")));

        $userRepository->save($user);
        dd($user);
        return new Response("<html><head></head><body></body></html>");
        // TODO: Implement __invoke() method.
    }

}