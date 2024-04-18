<?php

namespace App\Controller;

use App\Entity\Trotinette;
use App\Entity\Station;
use App\Repository\TrotinetteRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\TrotinetteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class TrotinetteController extends AbstractController
{
    #[Route('/base', name: 'app_trotinette')]
    public function index(): Response
    {
        return $this->render('baseAdmin.html.twig');
    }

    #[Route('/getAll', name: 'app_getAll')]
    public function getAll(Request $request , TrotinetteRepository $repo): Response
    {
        $trotinettes = $repo->findAll();
        return $this->render('trotinette/index.html.twig' , 
        [
            'c' =>$trotinettes
        ]);
    }

    #[Route('/trotinette', name: 'trotinette_add')]
    public function add(Request $request , EntityManagerInterface $entityManager): Response
    {
        $trotinette = new Trotinette();
        $form = $this->createForm(TrotinetteType::class , $trotinette);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($trotinette);
            $entityManager->flush();

            return $this->redirectToRoute('app_getAll');
        }    

        return $this->render('trotinette/ajouter.html.twig' , 
        [
            'form'=>$form->createView()
        ]);
    }

    #[Route('/update/{id}', name: 'trotinette_update')]
    public function update(Request $request , TrotinetteRepository $repo,EntityManagerInterface $entityManager, $id): Response
    {
        $trotinette = $repo->find($id);
        $form = $this->createForm(TrotinetteType::class , $trotinette);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->flush();

            return $this->redirectToRoute('app_getAll');
        }    

        return $this->render('trotinette/ajouter.html.twig' , 
        [
            'form'=>$form->createView()
        ]);
    }

    #[Route('/delete/{id}' , name:'deleteT')]
    public function delete(ManagerRegistry $manager , TrotinetteRepository $repo, $id)
    {
       $trotinette = $repo->find($id);
       if($trotinette)
       {
        $manager->getManager()->remove($trotinette);
        $manager->getManager()->flush();
        return $this->redirectToRoute('app_getAll');
       }
       else return new Response("there is no Trotinette with this ID");
    }
}
