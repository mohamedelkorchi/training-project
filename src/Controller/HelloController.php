<?php

namespace App\Controller;

use App\Taxes\Calculator;


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

    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }


    // protected $logger;

    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }
   

    #[Route("/hello/{name<\D+>}", name:"hello")]            // changement de contrainte par defaut "World"
    public function hello($name = "world"/*, LoggerInterface $logger */)
    {
        
        // $logger->error("mon message log2");               /*fonctionne pas sur la page /hello*/
        $tva = $this->calculator->calcul(100);
        dd($tva);
        


        return new Response("Hello $name");


    }
}
