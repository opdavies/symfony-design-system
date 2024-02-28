<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'home')]
    public function __invoke(): Response
    {
        // TODO: show a list of all components.
        return $this->render('home.html.twig');
    }
}
