<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConvertisseurController extends Controller
{
    public function indexAction()
    {
        return $this->render(':default:index.html.twig');
    }

    public function saveAction(Request $request)
    {
        $from=$request->get('From');
        $to=$request->get('To');
        $amount=$request->get('Amount');



    }

    public function updateAction()
    {
    }


    public function convertAction(Request $request)
    {
        $from=$request->get('From');
        $to=$request->get('To');

        $json=file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20csv%20where%20url%3D%22http%3A%2F%2Ffinance.yahoo.com%2Fd%2Fquotes.csv%3Fe%3D.csv%26f%3Dnl1d1t1%26s%3D$from$to%3DX%22%3B&format=json&callback=");

        return JsonResponse::create($json);

    }

}
