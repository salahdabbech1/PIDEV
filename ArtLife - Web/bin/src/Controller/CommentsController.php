<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\Comments1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/comments")
 */
class CommentsController extends AbstractController
{
    /**
     * @Route("/", name="comments_index", methods={"GET"})
     */
    public function index(): Response
    {
        $comments = $this->getDoctrine()
            ->getRepository(Comments::class)
            ->findAll();

        return $this->render('comments/index.html.twig', [
            'comments' => $comments,
        ]);
    }
    public function setDueDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('DueDate', $value);
        $this->_data['DueDate'] = $value;
        return $this;
    }

    /**
     * @Route("/new", name="comments_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $comment = new Comments();
        $form = $this->createForm(Comments1Type::class, $comment);
        $form->handleRequest($request);
        $comment->setDate(date("Y-m-d H:i:s"));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('film_index');
        }

        return $this->render('comments/new.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comments_show", methods={"GET"})
     */
    public function show(Comments $comment): Response
    {
        return $this->render('comments/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="comments_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Comments $comment): Response
    {
        $form = $this->createForm(Comments1Type::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comments_index');
        }

        return $this->render('comments/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comments_delete", methods={"POST"})
     */
    public function delete(Request $request, Comments $comment): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('film_index');
    }
}
