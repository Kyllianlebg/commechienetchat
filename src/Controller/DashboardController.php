<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route("/dashboard")]
    public function base()
    {
        return $this->render("registration/dashboard.html.twig");
    }
}