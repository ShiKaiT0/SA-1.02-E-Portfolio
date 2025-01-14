<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response{
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/portfolio/home',name:'app_portofolio_home')]
    public function home(): Response{
        return $this->render('blog/home.html.twig');
    }

    #[Route('/portfolio/skills',name:'app_skills')]
    public function pageone(): Response{
        return $this->render('blog/pages/page_skills.html.twig');
    }

    #[Route('/portfolio/personal',name:'app_personal')]
    public function pagetwo(): Response{
        return $this->render('blog/pages/page_personal.html.twig');
    }

    #[Route('/portfolio/contact',name:'app_contact')] // Where you'll be able to export the CV
    public function pagethree(): Response{
        return $this->render('blog/pages/page_contact.html.twig');
    }
}
