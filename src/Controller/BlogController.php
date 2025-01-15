<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/debug', name: 'app_blog')]
    public function index(): Response{
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/portfolio/home',name:'app_portofolio_home')]
    public function home(): Response{
        return $this->render('blog/portfolio/home.html.twig');
    }

    #[Route('/portfolio/skills',name:'app_skills')]
    public function pageone(): Response{
        return $this->render('blog/portfolio/page_skills.html.twig');
    }

    #[Route('/portfolio/personal',name:'app_personal')]
    public function pagetwo(): Response{
        return $this->render('blog/portfolio/page_personal.html.twig');
    }

    #[Route('/portfolio/contact',name:'app_contact')] // Where you'll be able to export the CV
    public function pagethree(): Response{
        return $this->render('blog/portfolio/page_contact.html.twig');
    }

    #[Route('/portfolio/cv',name:'app_cv')]
    public function pagefour(): Response{
        return $this->render('blog/portfolio/page_cv.html.twig');
    }

    #[Route('/portfolio/updated/skills',name:'app_updated_skills')]
    public function updatedskills(): Response{
        return $this->render('blog/portfolio/page_updated_skills.html.twig');
    }
}
