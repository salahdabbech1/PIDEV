<?php

namespace App\Controller;

use DateTime;
use App\Entity\Tactor;

use App\Entity\Concert;

use App\Entity\Theatre;
use ReCaptcha\ReCaptcha;
use App\Form\Theatre1Type;
use App\Form\Theatre4Type;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart\Calendar;
use App\Repository\TheatreRepository;



/**
 * @Route("/theatre")
 */
class TheatreController extends AbstractController
{

    /**
     * @Route("/triC", name="triC")
     */
    public function Tri(Request $request,TheatreRepository $repository): Response
    {
        $critere=$request->get('special');

        if($critere== "genre"){
            $order=$request->get('type');

            if($order== "Croissant"){
                $theatre = $repository->tri_asc2();
            }
            else {
                $theatre = $repository->tri_desc2();
            }

        }

        else {
            $order=$request->get('type');

            if($order== "Croissant"){
                $theatre = $repository->tri_asc();
            }

            else
            {
                $theatre = $repository->tri_desc();
            }
        }


        // Retrieve the entity manager of Doctrine



        // Render the twig view
        return $this->render('theatre/index_tri.html.twig', [
            'theatres' => $theatre
        ]);
    }


    /**
     * @Route("/calendar", name="calendar")
     */
    public function calendar()
    {
        $repository = $this->getDoctrine()->getRepository(Theatre::class);
        $event = $repository->findAll();
        $rdvs=[];
        foreach($event as $event){
            $rdvs[]=[
                'id' => $event->getId(),
                'title' => $event->getName(),
                'genre'=>$event->getGenre(),
                'start' => $event->getRdate()->format('Y-m-d'),
                'image' => $event->getImage(),
                'trailer'=>$event->getTrailer(),
                'description' => $event->getDescription(),
                'background'=>$event->getPoster(),



            ];
        }
        $data= json_encode($rdvs);
        return $this->render('theatre/Callender.html.twig', compact('data'));
    }
    /**
     * @Route("/api/{id}/edit", name="editCalendar", methods={"PUT"})
     */
    public function editCalendar(Theatre $calendar, Request $request)    {
        //récuperation de données
        $donnees=json_decode($request->getContent());

        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->background) && !empty($donnees->background) &&
            isset($donnees->image) && !empty($donnees->image) &&

            isset($donnees->trailer) && !empty($donnees->trailer) &&
            isset($donnees->genre) && !empty($donnees->genre)

        ){
            //données completes, on initialise un code
            $code = 200;

            //verification de l'id existe
            if(!$calendar){
                //on instancie un rende
                $calendar = new Theatre;
                //change code
                $code=201;
            }
            //on hydrate l'objet avec les données
            $calendar->setName($donnees->title);
            $calendar->setDescription($donnees->description);
            $calendar->setRdate(new DateTime($donnees->start));

            $calendar->setImage($donnees->image);
            $calendar->setPoster($donnees->background);
            $calendar->setTrailer($donnees->trailer);
            $calendar->setGenre($donnees->genre);

            $em=$this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();
            //return code
            return new Response('Ok', $code);
        }else{
            //données non completes
            return new Response('data not complete', 404);
        }

        return $this->render('theatre/calendarEdit.html.twig');
    }

    /**
     * @Route("/stat", name="stati")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Theatre::class);
        $theatres = $repository->findAll();
        $co=0;
        $rea=0;
        $his=0;
        foreach ($theatres as $theatres)
        {
            if ($theatres->getGenre()=='Comedy')  :
                $co+=1;
            elseif ($theatres->getGenre()=='Reality')  :

                $rea+=1;
            else :
                $his +=1;

            endif;
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['', ''],
                ['comedy',     $co],
                ['reality',      $rea],
                ['historical',      $his],

            ]
        );
        $pieChart->getOptions()->setTitle('Theatre par Category');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('theatre/stat.html.twig', array('piechart' => $pieChart));
    }

    /**
     * @Route("/quiz", name="quiz")
     */
    public function quiz(Request $request):Response
    {
        // $recaptcha = new ReCaptcha('6Le8G7caAAAAAGiGmybE3nuxZ6Zjs-faYcjTOTVQ');
        //$resp = $recaptcha->verify($request->request->get('g-recaptcha-response'));


        return $this->render('theatre/quiz.html.twig');
    }
    /**
     * @Route("/", name="theatre_index")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();
        // Get some repository of data, in our case we have an Concerts entity
        $TheatreRepository = $em->getRepository(Theatre::class);
        // Find all the data on the Concerts table, filter your query as you need
        $allTheatresQuery = $TheatreRepository->createQueryBuilder('theatre')
            ->orWhere('theatre.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();
        // Paginate the results of the query
        $theatres = $paginator->paginate(
        // Doctrine Query, not results
            $allTheatresQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3);
        return $this->render('theatre/index.html.twig', [
            'theatres' => $theatres,


        ]);
    }

    /**
     * @Route("/admin", name="theatre_index2", methods={"GET"})
     */
    public function index2(): Response
    {
        $theatres = $this->getDoctrine()
            ->getRepository(Theatre::class)
            ->findAll();

        return $this->render('theatre/indexAdmin.html.twig', [
            'theatres' => $theatres,
        ]);
    }

    /**
     * @Route("/admin/new", name="theatre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $theatre = new Theatre();
        $form = $this->createForm(Theatre4Type::class, $theatre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->isSubmitted() && $form->isValid()) {

                $req=$form->get('image')->getData();
                $theatre->setImage("/images/theatres/".$req) ;
                $req=$form->get('poster')->getData();
                $theatre->setPoster("/images/theatres/".$req) ;

                $entityManager = $this->getDoctrine()->getManager();


                $entityManager->persist($theatre);
                $entityManager->flush();






                return $this->redirectToRoute('theatre_index2');

            }


            return $this->redirectToRoute('theatre_index2');
        }


        return $this->render('theatre/new.html.twig', [
            'theatre' => $theatre,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}", name="theatre_show", methods={"GET"})
     */
    public function show(Theatre $theatre): Response
    {
        $tactors = $this->getDoctrine()
            ->getRepository(Tactor::class)
            ->findAll();
        $form = $this->createForm(Theatre1Type::class, $theatre);
        return $this->render('theatre/show.html.twig', [
            'theatre' => $theatre,
            'tactors' => $tactors,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/show", name="theatre_show_back", methods={"GET"})
     */
    public function show2(Theatre $theatre): Response
    {
        $tactors = $this->getDoctrine()
            ->getRepository(Tactor::class)
            ->findAll();
        return $this->render('theatre/showAdmin.html.twig', [
            'theatre' => $theatre,
            'tactors' => $tactors,

        ]);
    }


    /**
     * @Route("/{id}/edit", name="theatre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Theatre $theatre): Response
    {
        $form = $this->createForm(Theatre4Type::class, $theatre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $theatre->setImage("/images/theatres/".$req) ;
            $req=$form->get('poster')->getData();
            $theatre->setPoster("/images/theatres/".$req) ;
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('theatre_index2');
        }

        return $this->render('theatre/edit.html.twig', [
            'theatre' => $theatre,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="theatre_delete", methods={"POST"})
     */
    public function delete(Request $request, Theatre $theatre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$theatre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($theatre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('theatre_index2');
    }

}
