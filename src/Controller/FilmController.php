<?php

namespace App\Controller;

use App\Entity\Factor;
use App\Entity\Film;
use App\Form\Film1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/film")
 */
class FilmController extends AbstractController
{
    /**
     * @Route("/", name="film_index", methods={"GET"})
     */
    public function index(): Response
    {
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findAll();


        return $this->render('film/index.html.twig', [

            'films' => $films,]);
    }
    /**
     * @Route("/admin", name="film_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findAll();


        return $this->render('film/indexAdmin.html.twig', [
            'films' => $films,
        ]);
    }

    /**
     * @Route("/admin/new", name="film_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $film = new Film();
        $form = $this->createForm(Film1Type::class, $film);
        $form->handleRequest($request);
        $formView = $form->createView();


        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $factor= $entityManager->getRepository(Factor::class)
                ->findOneBy(['name'=>'Kit Harington']);
            $film->addFilmActor($factor);
            $entityManager->persist($film);
            $entityManager->flush();



            return $this->redirectToRoute('/admin');

        }

        return $this->render('film/new.html.twig', [
            'film' => $film,
            'form' => $formView,
        ]);
    }

    /**
     * @Route("/{id}", name="film_show", methods={"GET"})
     */
    public function show(Film $film): Response
    {
        $factors = $this->getDoctrine()
            ->getRepository(Factor::class)
            ->findAll();
        return $this->render('film/show.html.twig', [
            'film' => $film,
            'factors' => $factors,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="film_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Film $film): Response
    {
        $form = $this->createForm(Film1Type::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin/');
        }

        return $this->render('film/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_delete", methods={"POST"})
     */
    public function delete(Request $request, Film $film): Response
    {
        if ($this->isCsrfTokenValid('delete'.$film->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($film);
            $entityManager->flush();

        }

        return $this->redirectToRoute('film_index');
    }
}
