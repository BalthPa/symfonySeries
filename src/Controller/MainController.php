<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="categories")
     */
    public function index()
    {
        $categorie = new Categories();

        $categoriesRepository = $this->getDoctrine()
                                ->getRepository(Categories::class)
                                ->findAll();

        return $this->render('main/index.html.twig', [
            'categories' => $categoriesRepository,
        ]);
    }
}
