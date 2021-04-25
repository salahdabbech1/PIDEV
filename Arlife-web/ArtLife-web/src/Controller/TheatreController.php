<?php

namespace App\Controller;

use App\Entity\Tactor;
use App\Entity\Theatre;

use ReCaptcha\ReCaptcha;
use App\Form\TheatreType;
use App\Form\Theatre1Type;
use App\Form\Theatre4Type;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




/**
 * @Route("/theatre")
 */
class TheatreController extends AbstractController
{
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
                'start' => $event->getRdate()->format('Y-m-d'),
                'end' => $event->getRdate()->format('Y-m-d'),
                'title' => $event->getName(),
                'description' => $event->getdescription(),
               
            ];
        }
        $data= json_encode($rdvs);
        return $this->render('theatre/Callender.html.twig', compact('data'));
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
     * @Route("/stat", name="stati")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Theatre::class);
        $theatres = $repository->findAll();
        $rd=0;
        $qu=0;
           foreach ($theatres as $theatres)
        {
            if ($theatres->getGenre()=='Comedy')  :
                $rd+=1;
            else:
                $qu+=1;
            endif;
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['', ''],
                ['comedy',     $rd],
                ['reality',      $qu],
               
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
     * @Route("/", name="theatre_index", methods={"GET"})
     */
    public function index(): Response
    {
        $theatres = $this->getDoctrine()
            ->getRepository(Theatre::class)
            ->findAll();

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
            'notification' =>$this->addFlash('success',' Theatre ajouté avec succès'),
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
