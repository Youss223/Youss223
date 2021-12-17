<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('Mag/home.html.twig');
    }
    #[Route('/confirm', name: 'conf')]
    public function conf(): Response
    {
        return $this->render('registration/confirmation_email.html.twig');
    }

}
