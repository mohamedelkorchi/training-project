<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    // #[Route("/hello/{name?World}", name:"hello")]   // la methode suivante est identique 
    // public function hello($name)
    // {
    //     return new Response("Hello $name");
    // }

    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route("/hello/{name<\D+>}", name:"hello")]      // changement de contrainte par defaut "World"
    public function hello($name = "world")
    {
        $this->logger->info("mon message log");
        return new Response("Hello $name");
    }
}
