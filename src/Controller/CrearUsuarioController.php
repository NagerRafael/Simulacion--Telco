<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrearUsuarioController extends AbstractController
{
    #[Route('/crear/usuario', name: 'app_crear_usuario')]
    public function index(): Response
    {
        return $this->render('crear_usuario/index.html.twig', [
            'controller_name' => 'CrearUsuarioController',
        ]);
    }
}
