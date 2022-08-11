<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/', name: 'app_presentation')]
    public function index(OffreRepository $offreRepository): Response
    {

        return $this->render('presentation/index.html.twig', [
            'controller_name' => 'PresentationController',
            'offres'=>$offreRepository->findAll()
        ]);
    }
}
