<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trotinette;
class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_home')]
    public function index(): Response
    {

       $trotinettes=$this->getDoctrine()->getRepository(Trotinette::class)->findAll();       
       
       return $this->render('home/index.html.twig', [
            'controller_name' => 'FrontController',
            'trotinettes' => $trotinettes,
        ]);
    }
}
