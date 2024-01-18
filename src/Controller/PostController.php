<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post/name', name: 'app_post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
    #[Route('/posts/{title}', name: 'show', methods: ['GET'])]
public function showPost(Post $post): Response
{
    return $this->render('post/show.html.twig', [
        'post' => $post,
    ]);
}
}
