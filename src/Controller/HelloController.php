<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    // #[Route('/hello', name: 'hello')]
    // public function index(): Response
    // {
    //     dd("Hello World");
    // }

    // #[Route("hello/{name}", name:"halleoName")]
    // public function name(Request $request, $name): Response
    // {
    //     dd("hello $name");
    // }

    // #[Route("/hello/{name?World}", name:"hello")]
    // public function hello($name)
    // {
    //     return new Response("Hello $name");
    // }

    #[Route("/hello/{name}", name:"hello")]      // changement de contrainte ar defaut "World"
    public function hello($name = "world")
    {
        return new Response("Hello $name");
    }
}
