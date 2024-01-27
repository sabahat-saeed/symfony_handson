<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response 
    {
        return new Response("HI!");
    }
} 