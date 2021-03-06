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
     * @Route("/entreprises", name="prostage_entreprises")
     */
    public function afficherEntreprises(): Response
    {
        return $this->render('prostage/affichageEntreprises.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

	/**
     * @Route("/formations", name="prostage_formations")
     */
    public function afficherFormations(): Response
    {
        return $this->render('prostage/affichageFormations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    /**
     * @Route("/stages/{id}", name="prostage_stage")
     */
    public function afficherStage($id): Response
    {
        return $this->render('prostage/affichageStage.html.twig', [
            'controller_name' => 'ProstageController',
            'idStage' => $id,
        ]);
    }

    /**
     * @Route("/entreprises/{id}", name="prostage_stagesParEntreprise")
     */
    public function afficherStagesParEntreprise($id): Response
    {
        return $this->render('prostage/affichageStagesParEntreprise.html.twig', [
            'controller_name' => 'ProstageController',
            'idEntreprise' => $id,
        ]);
    }

    /**
     * @Route("/formations/{id}", name="prostage_stagesParFormation")
     */
    public function afficherStagesParFormation($id): Response
    {
        return $this->render('prostage/affichageStagesParFormation.html.twig', [
            'controller_name' => 'ProstageController',
            'idFormation' => $id,
        ]);
    }
}