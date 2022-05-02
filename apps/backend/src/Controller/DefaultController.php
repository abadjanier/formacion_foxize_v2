<?php


namespace App\Backend\Controller;


use App\Backoffice\Curriculums\Domain\Curriculum;
use App\Backoffice\Users\Domain\User;
use App\Backoffice\Users\Domain\UserEmail;
use App\Backoffice\Users\Domain\UserName;
use App\Backoffice\Users\Domain\UserRepository;
use App\Backoffice\Users\Domain\UserUsername;
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
         * @var Curriculum
         */
        $cv = $entityManager->getRepository(Curriculum::class)->find(1);

        dump($cv->getUuid());

        dd($cv);
        dd($mysqlSchemaSQL());
        dump($userRepository->byId((int) $id));

        $user = new User();
        $user->setName(new UserName('Abad'))
            ->setEmail(new UserEmail('abad@foxize.com'))
            ->setSurname(new UserUsername('Rodríguez'));

        return new Response("<html><head></head><body></body></html>");
        // TODO: Implement __invoke() method.
    }

}