<?php

namespace App\Controller;

use App\Entity\Announcement;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\AnnouncementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trotinette;
use App\Entity\Station;

#[Route('/')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home' )]
    public function index(AnnouncementRepository $announcementRepository, ReservationRepository $reservationRepository): Response
    {
   
        $announcements = $announcementRepository->findAll();
        $reservations = $reservationRepository->findAll();
        

        $totalReservations = count($reservations);
        $confirmedCount = $canceledCount = $pendingCount = 0;
        foreach ($reservations as $reservation) {
            switch ($reservation->getStatus()) {
                case 'Confirmed':
                    $confirmedCount++;
                    break;
                case 'Canceled':
                    $canceledCount++;
                    break;
                case 'Pending':
                    $pendingCount++;
                    break;
                default:
                    // Gérer d'autres états si nécessaire
                    break;
            }
        }
        $confirmedPercentage = $totalReservations > 0 ? round(($confirmedCount / $totalReservations) * 100) : 0;
        $canceledPercentage = $totalReservations > 0 ? round(($canceledCount / $totalReservations) * 100) : 0;
        $pendingPercentage = $totalReservations > 0 ? round(($pendingCount / $totalReservations) * 100) : 0;

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
          
            'announcements' => $announcements,
            
            'confirmedPercentage' => $confirmedPercentage,
            'canceledPercentage' => $canceledPercentage,
            'pendingPercentage' => $pendingPercentage,
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard' )]
    public function dashboard(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        return $this->render('dashboard/index.html.twig', [
            'reservations' => $reservations,
            'controller_name' => 'HomeController',
        ]);
    }
}
