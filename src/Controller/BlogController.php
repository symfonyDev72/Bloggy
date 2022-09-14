<?php

namespace App\Controller;

use App\Service\BannerBackground;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $_route = $request->attributes->get('_route');
        $banner = new BannerBackground();

        return $this->render('blog/index.html.twig', [
            'title' => 'Accueil',
            'bg_page' => $banner->changeBackground($_route),
            '_route' => $_route
        ]);
    }

    #[Route('/article/blog', name: 'app_blog')]
    public function blog(Request $request): Response
    {
        $_route = $request->attributes->get('_route');
        $banner = new BannerBackground();

        return $this->render('blog/blog.html.twig', [
            'title' => 'Blog',
            'bg_page' => $banner->changeBackground($_route),
            '_route' => $_route
        ]);
    }

    #[Route('/article/show/{id}', name: 'app_show')]
    public function show(Request $request, $id): Response
    {
        return $this->render('blog/show.html.twig', [
            'id' => $id,
            'title' => 'Article ' . $id,
            '_route' => $request->attributes->get('_route')
        ]);
    }

    #[Route('/article/new', name: 'app_create')]
    #[Route('/article/edit/{id}', name: 'app_edit')]
    public function addOrEdit(Request $request, $id = null): Response
    {
        $_route = $request->attributes->get('_route');
        $banner = new BannerBackground();


        // $form = $this->createForm(ContactType::class);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {

        //     $data = $form->getData();
        //     extract($data);

        //     $contactMail = new ContactMail();
        //     $contactMail->send($email, $subject, $message);


        //   ***************************************************************

        return $this->render('blog/add_edit.html.twig', [
            'title' => $request->attributes->get('_route') == 'app_edit' ? 'Editer un article' : 'Créer un article',
            'bg_page' => $banner->changeBackground($_route),
            'id' => $id,
            '_route' => $_route,
        ]);
    }
}
