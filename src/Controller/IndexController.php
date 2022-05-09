<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    public function index(): Response
    {
        // initialise une variable qui sera exploitée dans la vue
        return $this->render('Index/index.html.twig');
    }
}
