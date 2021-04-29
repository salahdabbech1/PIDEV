<?php

namespace App\Controller;

use App\Entity\Tactor;
use App\Form\Tactor3Type;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TactorRepository;

/**
 * @Route("/tactor")
 */
class TactorController extends AbstractController
{
    /**
     * @Route("/triA", name="triA")
     */
    public function Tri(Request $request,TactorRepository $repository): Response
    {
        $critere=$request->get('special');



        $order=$request->get('type');

        if($order== "Croissant"){
            $tactor = $repository->tri_asc();
        }

        else
        {
            $tactor = $repository->tri_desc();
        }


        // Retrieve the entity manager of Doctrine



        // Render the twig view
        return $this->render('tactor/index_tri.html.twig', [
            'tactors' => $tactor
        ]);
    }
    /**
     * @Route("/", name="tactor_index")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {

        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();
        // Get some repository of data, in our case we have an Concerts entity
        $TactorRepository = $em->getRepository(Tactor::class);
        // Find all the data on the Concerts table, filter your query as you need
        $allTactorQuery = $TactorRepository->createQueryBuilder('tactor')
            ->orWhere('tactor.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();
        // Paginate the results of the query
        $tactors = $paginator->paginate(
        // Doctrine Query, not results
            $allTactorQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3);
        return $this->render('tactor/index.html.twig', [
            'tactors' => $tactors,
        ]);
    }

    /**
     * @Route("/admin", name="tactor_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $tactors = $this->getDoctrine()
            ->getRepository(Tactor::class)
            ->findAll();

        return $this->render('tactor/indexAdmin.html.twig', [
            'tactors' => $tactors,
        ]);
    }

    /**
     * @Route("/admin/new", name="tactor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tactor = new Tactor();
        $form = $this->createForm(Tactor3Type::class, $tactor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $tactor->setImage("/images/tactors/".$req) ;

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tactor);
            $entityManager->flush();


            return $this->redirectToRoute('tactor_index2');
        }

        return $this->render('tactor/new.html.twig', [
            'tactor' => $tactor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tactor_show", methods={"GET"})
     */
    public function show(Tactor $tactor): Response
    {
        return $this->render('tactor/show.html.twig', [
            'tactor' => $tactor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tactor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tactor $tactor): Response
    {
        $form = $this->createForm(Tactor3Type::class, $tactor);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $tactor->setImage("/images/tactors/".$req) ;

            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('tactor_index2');
        }

        return $this->render('tactor/edit.html.twig', [
            'tactor' => $tactor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tactor_delete", methods={"POST"})
     */
    public function delete(Request $request, Tactor $tactor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tactor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tactor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tactor_index2');
    }
}
