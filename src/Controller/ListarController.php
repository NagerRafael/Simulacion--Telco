<?php

namespace App\Controller;

use App\Repository\CursoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Summary of ListarController
 */
class ListarController extends AbstractController
{
    #[Route('/listar', name: 'app_listar')]
    public function index(CursoRepository $cursoRepository): Response
    {
        return $this->render('listar/index.html.twig', [
            'cursos' => $cursoRepository->findAll(),
        ]);
    }

}
