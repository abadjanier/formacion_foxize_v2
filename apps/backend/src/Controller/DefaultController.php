<?php


namespace App\Backend\Controller;


use App\Backoffice\Curriculums\Domain\Curriculum;
use App\Backoffice\Curriculums\Domain\CurriculumName;
use App\Backoffice\Users\Domain\User;
use App\Backoffice\Users\Domain\UserEmail;
use App\Backoffice\Users\Domain\UserName;
use App\Backoffice\Users\Domain\UserUsername;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/",name="index_default_controller")
     * @param Request $request
     */
    public function __invoke(Request $request)
    {

        $user = new User();
        $user->setName(new UserName('Abad'))
            ->setEmail(new UserEmail('abad@foxize.com'))
            ->setSurname(new UserUsername('Rodríguez'));

        $user->addCV(Curriculum::create(null,new CurriculumName('Cv de prueba'),$user));
        dd($user);
        // TODO: Implement __invoke() method.
    }

}