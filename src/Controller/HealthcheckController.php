<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthcheckController
{
    #[Route('/healthcheck')]
    public function __invoke(): Response
    {
        return new JsonResponse(['ping' => 'pong']);
    }
}
