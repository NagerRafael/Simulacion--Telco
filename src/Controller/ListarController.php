<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Summary of ListarController
 */
class ListarController extends AbstractController
{
    #[Route('/listar', name: 'app_listar')]
    /**
     * Summary of index
     * @param TiendaRepository $tiendaRepository
     * @return Response
     */
    public function index(TiendaRepository $tiendaRepository): Response
    {
        return $this->render('listar/index.html.twig', [
            'controller_name' => 'ListarController',
        ]);
    }
}
