<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Rest\Get('/api/get', name: 'app_api_index', methods:{"GET"})]    
    public function index(): Response
    {
        $data = {
            "pseudo" : "serge",
            "age" : 24,
            "sexe" : "male"
        }

        dd($data);

        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    // #[Rest\Get('/api/post', name: 'app_api_post', methods={"Get"})]    
    // public function index(): Response
    // {  

    //     return $this->render('api/index.html.twig', [
    //         'controller_name' => 'ApiController',
    //     ]);
    // }
}
