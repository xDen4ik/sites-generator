<?php

namespace App\Controller;

use App\Controller\Base\BaseController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security as CoreSecurity;
use OpenApi\Annotations as OA;
use App\Services\Materials\MaterialsServices;

class IndexController extends BaseController
{
    /**
     * Главная страница
     *
     * @Route("/", name="index", methods={"GET"})
     */
    public function indexAction(): Response
    {
        return $this->render('/pages/index.html.twig', [
            'title' => 'Creator',
        ]);
    }
}
