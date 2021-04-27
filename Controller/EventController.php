<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="event")
     */
    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/front", name="event_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();


        return $this->render('event/indexFront.html.twig', [
            'events' => $events,
        ]);
    }

    /**
     * @Route("/front/{id}", name="event_front", methods={"GET"})
     */
    public function showfront(event $event): Response
    {
        return $this->render('event/showfront.html.twig', [
            'event' => $event,
        ]);
    }



    /**
     * @Route("/display", name="display_events", methods={"GET", "POST"})
     */
    public function list( Request $request)
    {

        $repository = $this->getDoctrine()->getRepository(Event::class);
        $items = $repository->findAll();


        return $this->render('event/display.html.twig',['events'=> $items]);
    }
    /**
     * @Route("/addevent", name="add_event")
     */
    public function add(Request $request)
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $event->setImage("/images/Events/".$req) ;


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();
            return $this->redirectToRoute('display_events');
        }
        return $this->render('event/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route ("/Supp/{id}",name="deleteE")
     */
    function Supprimer($id,EventRepository $repo){
        $event=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('display_events');}

    /**
     * @Route("/{id}/edit", name="event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $event->setImage("images/Events/".$req) ;
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('display_events');
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }





}
