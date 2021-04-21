<?php

namespace App\Controller;

use App\Entity\Factor;
use App\Form\FactorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @Route("/factor")
 */
class FactorController extends AbstractController
{
    /**
     * @Route("/", name="factor_index", methods={"GET"})
     */
    public function index(): Response
    {
        $factors = $this->getDoctrine()
            ->getRepository(Factor::class)
            ->findAll();

        return $this->render('factor/index.html.twig', [
            'factors' => $factors,
        ]);
    }
    /**
         * @Route("/admin", name="factor_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $factors = $this->getDoctrine()
            ->getRepository(Factor::class)
            ->findAll();

        return $this->render('factor/indexAdmin.html.twig', [
            'factors' => $factors,
        ]);
    }

    /**
     * @Route("/admin/new", name="factor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $factor = new Factor();
        $form = $this->createForm(FactorType::class, $factor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($factor);
            $entityManager->flush();


            return $this->redirectToRoute('factor_index');
        }

        return $this->render('factor/new.html.twig', [
            'factor' => $factor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="factor_show", methods={"GET"})
     */
    public function show(Factor $factor): Response
    {
        return $this->render('factor/show.html.twig', [
            'factor' => $factor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="factor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Factor $factor): Response
    {
        $form = $this->createForm(FactorType::class, $factor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('factor_index');
        }

        return $this->render('factor/edit.html.twig', [
            'factor' => $factor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="factor_delete", methods={"POST"})
     */
    public function delete(Request $request, Factor $factor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$factor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($factor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('factor_index');
    }
}
