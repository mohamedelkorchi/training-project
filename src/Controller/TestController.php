<?php

namespace App\Controller;

use App\Taxes\Calculator;

// use App\Controller\TestController;
use App\Controller\TestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{

    protected $calculator;

    public function __construct(\App\Taxes\Calculator $calculer)
    {
        $this->calculator = $calculer;
    }
    
     #[Route("/", name: "index")]
     
    public function index()
    {
       $tva = $this->calculator->calcul(200);
       dump($tva);
        dump("Ca fonctionne");
        die();
    }


    /**
     * @Route("/test/{age<\d+>?0}", name="test")
     */
    public function test(Request $request, $age) // reprend la ligne 19
    {
        // dump("page test");
        // $request = Request::createFromGlobals();

        // dump($request);

        // $age = $request->attributes->get("age"); // remplace le code avec le if pour l'age 

        return new Response("Vous avez $age ans");

        // $age = 0;

        // if (!empty($_GET['age'])) {          // mettre age =0 et le if pour pouvoir prendre lage sans le mettre dans lurl

        //     $age = $_GET['age'];
        // }

        dd("t'as $age ans");  // dd signifie DUMP AND DIE           
       
    }    

}