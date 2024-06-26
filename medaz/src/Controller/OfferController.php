<?php

namespace App\Controller;

use App\Entity\Offer;
use App\Form\OfferType;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Routing\Attribute\Route;


class OfferController extends AbstractController
{
    #[Route('/offers', name: 'app_offer_index', methods: ['GET'])]
    public function index(OfferRepository $offerRepository): Response
    {
        return $this->render('offer/index.html.twig', [
            'offers' => $offerRepository->findAll(),
        ]);
    }

    #[Route('/{id}/editoffer', name: 'app_offre_update_status', methods: ['POST'])]
public function updateOfferStatus(int $id, Request $request, CsrfTokenManagerInterface $csrfTokenManager, EntityManagerInterface $entityManager): Response
{
    $token = new CsrfToken('update_status' . $id, $request->request->get('_token'));
    if (!$csrfTokenManager->isTokenValid($token)) {
        return $this->json(['status' => 'error', 'message' => 'Invalid CSRF token'], Response::HTTP_FORBIDDEN);
    }

    $offer = $entityManager->getRepository(Offer::class)->find($id);

    if (!$offer) {
        return $this->json(['status' => 'error', 'message' => 'Offer not found'], Response::HTTP_NOT_FOUND);
    }

    try {
        $newStatus = $request->request->get('statusOffre');
        $offer->setStatusOffre($newStatus);
        $entityManager->flush();

        // Rediriger vers une route définie après la mise à jour réussie
        return $this->redirectToRoute('app_offer_index');
    } catch (\Exception $e) {
        return $this->json(['status' => 'error', 'message' => 'Error updating offer: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}


    #[Route('/newoffers', name: 'app_offer_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offer = new Offer();
        $form = $this->createForm(OfferType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offer);
            $entityManager->flush();

            return $this->redirectToRoute('app_offer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offer/new.html.twig', [
            'offer' => $offer,
            'form' => $form,
        ]);
    }

    #[Route('/showoffre/{id}', name: 'app_offer_show', methods: ['GET'])]
    public function show(Offer $offer): Response
    {
        return $this->render('offer/show.html.twig', [
            'offer' => $offer,
        ]);
    }

    #[Route('/{id}/editoffre', name: 'app_offer_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offer $offer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OfferType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offer/edit.html.twig', [
            'offer' => $offer,
            'form' => $form,
        ]);
    }

    #[Route('/deleteoffre/{id}', name: 'app_offer_delete', methods: ['POST'])]
    public function delete(Request $request, Offer $offer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offer->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($offer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offer_index', [], Response::HTTP_SEE_OTHER);
    }
}
