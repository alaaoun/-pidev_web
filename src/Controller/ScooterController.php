<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

//#[Route('/scooter')]
class ScooterController extends AbstractController
{
    #[Route('/listscooter', name: 'app_scooter')]
    public function index(): Response
    {
        return $this->render('scooter/index.html.twig');
    }

    #[Route('/booking', name: 'app_scooter_booking' )]
    public function booking(): Response
    {
        return $this->render('scooter/booking.html.twig');
    }
    
    #[Route("/booking/new", name: 'booking_create')]
    public function create(Request $request): Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->redirectToRoute('some_route_after_success');
        }else{
            dump($form->getErrors(true, true));
        }

        

        return $this->render('booking/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }









}
