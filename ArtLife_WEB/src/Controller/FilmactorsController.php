<?php

namespace App\Controller;

use App\Entity\Filmactors;
use App\Form\FilmactorsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/filmactors")
 */
class FilmactorsController extends AbstractController
{
    /**
     * @Route("/", name="filmactors_index", methods={"GET"})
     */
    public function index(): Response
    {
        $filmactors = $this->getDoctrine()
            ->getRepository(Filmactors::class)
            ->findAll();

        return $this->render('filmactors/index.html.twig', [
            'filmactors' => $filmactors,
        ]);
    }

    /**
     * @Route("/new", name="filmactors_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $filmactor = new Filmactors();
        $form = $this->createForm(FilmactorsType::class, $filmactor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($filmactor);
            $entityManager->flush();

            return $this->redirectToRoute('filmactors_index');
        }

        return $this->render('filmactors/new.html.twig', [
            'filmactor' => $filmactor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="filmactors_show", methods={"GET"})
     */
    public function show(Filmactors $filmactor): Response
    {
        return $this->render('filmactors/show.html.twig', [
            'filmactor' => $filmactor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="filmactors_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Filmactors $filmactor): Response
    {
        $form = $this->createForm(FilmactorsType::class, $filmactor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('filmactors_index');
        }

        return $this->render('filmactors/edit.html.twig', [
            'filmactor' => $filmactor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="filmactors_delete", methods={"POST"})
     */
    public function delete(Request $request, Filmactors $filmactor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$filmactor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($filmactor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('filmactors_index');
    }
}
