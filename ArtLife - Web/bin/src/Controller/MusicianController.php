<?php

namespace App\Controller;

use App\Entity\Musician;
use App\Form\MusicianType;
use App\Repository\MusicianRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Flasher\Prime\Factory\NotificationFactory;
use Flasher\Prime\Storage\StorageManagerInterface;
use Flasher\Toastr\Prime\ToastrFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/musician")
 */
class MusicianController extends AbstractController
{    /**
 * @Route("/affich", name="musician_index3", methods={"GET"})
 */
    public function index3(): Response
    {
        $musicians = $this->getDoctrine()
            ->getRepository(Musician::class)
            ->findAll();

        return $this->render('musician/index.html.twig', [
            'musicians' => $musicians,
            'notification' =>$this->addFlash('success',' Musician ajouté avec succès'),
        ]);
    }
    /**
     * @Route("/stat", name="statiAZEZADS")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Musician::class);
        $Musicians = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;
        $es=0;

        $d1=new \DateTime('2021-01-01');
        $d2=new \DateTime('2016-01-01');
        $d3 = new \DateTime('2014-01-01');

        foreach ($Musicians as $Musicians)
        {
            if ($Musicians->getBorn()> $d1)  :

                $rd+=1;
            elseif (($Musicians->getBorn()< $d2) && ($Musicians->getBorn() >$d3)):

                $qu+=1;
            else :
                $es +=1;

            endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Superieur à 2021', 'nombres'],
                ['Superieur à 2021',     $rd],
                ['Entre 2021 et 2016',      $qu],
                ['Avant 2016',   $es]
            ]
        );
        $pieChart->getOptions()->setTitle('Date dinscription des musiciens');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('musician/stat.html.twig', array('piechart' => $pieChart));
    }


    /**
     * @Route("/", name="musician_index", methods={"GET"})
     */
    public function index(): Response
    {
        $musicians = $this->getDoctrine()
            ->getRepository(Musician::class)
            ->findAll();

        return $this->render('musician/index.html.twig', [
            'musicians' => $musicians,
        ]);
    }

    /**
     * @Route("/front", name="musician_front", methods={"GET"})
     */
    public function index2(): Response
    {
        $musicians = $this->getDoctrine()
            ->getRepository(Musician::class)
            ->findAll();

        return $this->render('musician/indexfront.html.twig', [
            'musicians' => $musicians,
        ]);
    }


    /**
     * @Route("/new", name="musician_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $musician = new Musician();
        $form = $this->createForm(MusicianType::class, $musician);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $musician->setImage("images/Musicians/".$req) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($musician);
            $entityManager->flush();
            return $this->redirectToRoute('musician_index3');
        }

        return $this->render('musician/new.html.twig', [
            'musician' => $musician,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="musician_show", methods={"GET"})
     */
    public function show(Musician $musician): Response
    {
        return $this->render('musician/show.html.twig', [
            'musician' => $musician,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="musician_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Musician $musician): Response
    {
        $form = $this->createForm(MusicianType::class, $musician);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $musician->setImage("images/Musicians/".$req) ;
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('musician_index');
        }

        return $this->render('musician/edit.html.twig', [
            'musician' => $musician,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="musician_delete", methods={"POST"})
     */
    public function delete(Request $request, Musician $musician): Response
    {
        if ($this->isCsrfTokenValid('delete'.$musician->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($musician);
            $entityManager->flush();
        }

        return $this->redirectToRoute('musician_index');
    }

    /**
     * @Route ("/Supp/{id}",name="deleteM")
     */
    function Supprimer($id,MusicianRepository $repo){
        $musician=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($musician);
        $em->flush();
        return $this->redirectToRoute('musician_index');}
}
