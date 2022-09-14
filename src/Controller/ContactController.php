<?php

namespace App\Controller;

use App\Service\BannerBackground;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $_route = $request->attributes->get('_route');
        $banner = new BannerBackground();

        return $this->render('contact/index.html.twig', [
            'title' => 'Contact',
            'bg_page' => $banner->changeBackground($_route),
            'subtitle' => 'dites nous tout',
            '_route' => $_route
        ]);
    }
}
