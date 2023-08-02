<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/api')]
class RestController extends AbstractController
{
    #[Route('/', name: '')]
    public function index(): Response
    {
        return new JsonResponse(['data' => "welcome to API"]);
    }
}
