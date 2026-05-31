<?php

namespace App\Controller\Mvc;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ErrorController extends AbstractController
{
    #[Route(path: '/{path}', name: 'not_found', requirements: ['path' => '.+'], priority: -255)]
    public function notFound(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig', [], new Response('', Response::HTTP_NOT_FOUND));
    }
}
