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
        // TODO: make this list dynamic.
        $components = [
            ['Logo', 'logo'],
            ['Page header', 'page-header'],
            ['Footer link', 'footer-link'],
            ['Footer', 'footer'],
        ];

        return $this->render(
            view: 'home.html.twig',
            parameters: [
                'components' => $components,
            ]
        );
    }
}
