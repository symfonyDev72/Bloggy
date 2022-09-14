<?php

namespace App\Controller;

use App\Service\BannerBackground;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(Request $request): Response
    {
        $_route = $request->attributes->get('_route');
        $banner = new BannerBackground();

        return $this->render('about/index.html.twig', [
            'title' => 'A propos',
            'bg_page' => $banner->changeBackground($_route),
            'subtitle' => 'me découvrir',
            '_route' => $_route
        ]);
    }
}
