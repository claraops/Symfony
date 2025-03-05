<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MusicRepository;
use App\Form\MusicType;
use App\Entity\Music;
use Symfony\Component\HttpFoundation\Request; 
use Doctrine\ORM\EntityManagerInterface;

final class MuscicController extends AbstractController
{
    #[Route('/', name: 'app_muscic')]
    public function index(
         MusicRepository $musicRepo
    ): Response
    {
        $music = $musicRepo->findAll();
        return $this->render('muscic/index.html.twig', [
        'musicsList' => $music,
        ]);
    }

    #[Route('/muscic/new', name: 'app_muscic_new')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response

    {
        $music = new Music();
        $form = $this->createForm(MusicType::class, $music);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $music = $form->getData();

            $entityManager->persist($music);
            $entityManager->flush();

            return $this->redirectToRoute('app_muscic');
        }

        return $this->render('muscic/new.html.twig',[
            'form' => $form,

        ]);
    }


}
