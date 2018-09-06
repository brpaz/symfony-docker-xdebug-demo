<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 06-09-2018
 * Time: 16:47
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/", methods={"GET"}, name="hello")
     * @param Request $request
     * @return Response
     */
    public function hello(Request $request)
    {
        $someVar = "hello";

        $someVar .= " xdebug";

        return new Response($someVar);
    }
}