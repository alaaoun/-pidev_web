<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AnnouncementRepository;

class HomeController extends AbstractController
{
  #[Route('/', name: 'app_home')]
  public function index(AnnouncementRepository $announcementRepository): Response
  {
      $announcements = $announcementRepository->findAll();

      return $this->render('home/index.html.twig', [
          'controller_name' => 'HomeController',
          'announcements' => $announcements,
      ]);
  }

    #[Route('/dashbord', name: 'app_dashbord' )]
    public function dashbord(): Response
    {
        return $this->render('dashboard/base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}
