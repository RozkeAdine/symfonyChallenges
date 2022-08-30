<?php
namespace App\Controller;

use App\Controller\DefaultController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
{

    #[Route('/default/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'website' => 'Bienvenue',
        ]);
    }
}