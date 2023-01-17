<?php

namespace App\Controller;

class TestController
{
    public function index()
    {
        var_dump("Ca fonctionne");
        die();
    }

    public function test()
    {
        // dump("page test");
        dd("page test");  // dd signifie DUMP AND DIE           
       
    }    

}