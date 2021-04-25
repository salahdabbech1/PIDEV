<?php

namespace App\Controller;

use App\Entity\Factor;
use App\Form\FactorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("factor", name="factor_new", methods={"GET","POST"})
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

}
