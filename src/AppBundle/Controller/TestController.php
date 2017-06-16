<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
	 /**
     * @Route("/test", name="testpage")
     */

    //la syntaxe Request $request équivaut à $request = new Request()
    public function testAction(Request $request)
    {
        $res = new Response('<html><head></head><boby><p>Test reussi</p></body></html>'); 
        return $res;
    }
}