<?php

namespace App\Controller;

use App\Entity\Post;
use Entity\User;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'post')]
    public function index(PostRepository $postRepository): Response
    {
        $lastPosts = $postRepository-> findLastPosts(6);
        return $this->render('post/index.html.twig', [
            'lastPosts' => $lastPosts,
        ]);
    }

    #[Route('/post', name: 'post_all')]
    public function all(PostRepository $postRepository): Response
    {
        $allPosts = $postRepository-> findAll();
        return $this->render('post/all.html.twig', [
            'allPosts' => $allPosts,
        ]);
    }
    #[Route('/post/{id}', name: 'post_read')]
    public function read(Post $posts): Response
    {
        return $this->render('post/read.html.twig', [
            'post' => $posts,
    ]);
    }
}
