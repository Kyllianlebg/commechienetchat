<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route("/login")]
     public function login()
     {
         return $this->render("login.html.twig");
     }
}