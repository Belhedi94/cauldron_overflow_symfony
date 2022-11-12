<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homePage() {
        return new Response('Hello there!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) {
        return new Response(ucwords(str_replace('-', ' ', sprintf('Another page for %s' , $slug))));
    }
}