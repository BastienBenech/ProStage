<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage_accueil")
     */
    public function index(): Response
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    /**
     * @Route("/stages/345", name="prostage_stage345")
     */
    public function afficherStage(): Response
    {
        return $this->render('prostage/affichageStage.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
}
