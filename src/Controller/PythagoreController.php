<?php

namespace App\Controller;

use App\service\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        $html = $this->pythagoreUtility->display();
        return $this->render('pythagore/index.html.twig', [
            'html' => $html,
            'title' => 'Symfony & table de pythagore',
            'nameStudent' => 'MIHAN Zlanca-Nto',
        ]);
    }
}
