<?php

namespace App\Controller;

use App\Entity\Tactor;
use App\Form\Tactor3Type;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/tactor")
 */
class TactorController extends AbstractController
{
         /**
     * @Route("/upcoming ", name="upcoming", methods={"GET"})
     * @ParamConverter("tactor", options={"mapping": {" tactor_index " : "name"}})
     */
    public function show2(Tactor $tactor)
    {   
        
        $entityManager = $this->getDoctrine()->getManager();
      
        $query = $entityManager->createQuery('
        SELECT t from tactor t where t.born between CURDATE() and (CURDATE() + INTERVAL 30 DAY)')->setParameter(1, '30');
      
        
        $birthdate = $query->getResult();
        return $this->render('tactor/showUpcoming.html.twig', [
            'tactor' => $birthdate,
        ]);
    }

      /**
     * @Route("/stat", name="stati")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Tactor::class);
        $tactors = $repository->findAll();
       

        $rd=0;
        $qu=0;
        $es=0;

        $d1=new \DateTime('2021-01-01');
        $d2=new \DateTime('2016-01-01');
        $d3 = new \DateTime('2014-01-01');

        foreach ($tactors as $tactors)
        {
            if ($tactors->getBorn()> $d1)  :

                $rd+=1;
            elseif (($tactors->getBorn()< $d2) && ($tactors->getBorn() >$d3)):

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
        $pieChart->getOptions()->setTitle('Date dinscription des onemanshows');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('tactor/stat.html.twig', array('piechart' => $pieChart));
    }
    /**
     * @Route("/", name="tactor_index", methods={"GET"})
     */
    public function index(): Response
    {
        $tactors = $this->getDoctrine()
            ->getRepository(Tactor::class)
            ->findAll();

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
            $logger = $this->get('erreur edit');
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
