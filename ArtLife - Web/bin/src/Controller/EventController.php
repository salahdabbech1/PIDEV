<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Ticket;
use App\Form\EventType;
use App\Form\TicketType;
use App\Repository\EventRepository;
use Knp\Component\Pager\PaginatorInterface;
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
     * @Route("/triC", name="triD")
     */
    public function Tri(Request $request,EventRepository $repository): Response
    {
        $critere=$request->get('special');

        if($critere== "type"){
            $order=$request->get('type');

            if($order== "Croissant"){
                $event = $repository->tri_asc2();
            }
            else {
                $event = $repository->tri_desc2();
            }

        }

        else {
            $order=$request->get('type');

            if($order== "Croissant"){
                $event = $repository->tri_asc();
            }

            else
            {
                $event = $repository->tri_desc();
            }
        }


        // Retrieve the entity manager of Doctrine



        // Render the twig view
        return $this->render('event/index_tri.html.twig', [
            'events' => $event
        ]);
    }

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
    public function index2(Request $request,PaginatorInterface $paginator): Response
    {

        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Events entity
        $EventRepository = $em->getRepository(Event::class);

        // Find all the data on the Events table, filter your query as you need
        $allEventQuery = $EventRepository->createQueryBuilder('Event')
            ->orWhere('Event.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();

        // Paginate the results of the query
        $events = $paginator->paginate(
        // Doctrine Query, not results
            $allEventQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );


        return $this->render('event/indexFront.html.twig', [
            'events' => $events,
        ]);

    }

    /**
     * @Route("/front/{id}", name="event_front", methods={"GET"})
     */
    public function showfront(event $event,Request $request): Response
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();

            return $this->redirectToRoute('ticket_index');
        }
        return $this->render('event/showfront.html.twig', [
            'event' => $event,
            'ticket' => $ticket,
            'form' => $form->createView(),
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
