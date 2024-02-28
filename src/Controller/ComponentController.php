<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ComponentController extends AbstractController
{
    #[Route(path: '/{componentName}', name: 'component_show')]
    public function __invoke(string $componentName): Response
    {
        $componentName = implode(
            array_map(
                array: explode(separator: '-', string: $componentName),
                callback: fn ($word) => ucfirst($word),
            )
        );

        return $this->render(
            view: 'component.html.twig',
            parameters: [
                'name' => $componentName,
            ],
        );
    }
}
