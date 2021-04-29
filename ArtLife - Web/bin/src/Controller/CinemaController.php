<?php

namespace App\Controller;

use App\Entity\Cinema;
use App\Form\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\CinemaRepository;
/**
 * @Route("/cinema")
 */
class CinemaController extends AbstractController
{
    /**
     * @Route("/triC", name="triC")
     */
    public function Tri(Request $request,CinemaRepository $repository): Response
    {
        $critere=$request->get('special');

        if($critere== "nbsalle"){
            $order=$request->get('type');

            if($order== "Croissant"){
                $cinema = $repository->tri_asc2();
            }
            else {
                $cinema = $repository->tri_desc2();
            }

        }

        else {
            $order=$request->get('type');

            if($order== "Croissant"){
                $cinema = $repository->tri_asc();
            }

            else
            {
                $cinema = $repository->tri_desc();
            }
        }


        // Retrieve the entity manager of Doctrine



        // Render the twig view
        return $this->render('cinema/index_tri.html.twig', [
            'cinemas' => $cinema
        ]);
    }

    /**
     * @Route("/stataaa/s", name="statitaaaas" ,methods={"GET"} )
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Cinema::class);
        $cinemas = $repository->findAll();
        $rd=0;
        $qu=0;
        foreach ($cinemas as $cinemas)
        {
            if ($cinemas->getRate()>3)  :
                $rd+=1;
            else:
                $qu+=1;
            endif;
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['', ''],
                ['more than 3',     $rd],
                ['less than 3',      $qu],

            ]
        );
        $pieChart->getOptions()->setTitle('   rate');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('cinema/stat.html.twig', array('piechart' => $pieChart));
    }

    /**
 * @Route("/front/{id}", name="cinemashow", methods={"GET"})
 */
    public function showfront(Cinema $cinema): Response
    {
        return $this->render('cinema/showfront.html.twig', [
            'cinema' => $cinema,
        ]);
    }

    /**
     * @Route("/", name="cinema_index", methods={"GET"})
     */
    public function index(): Response
    {
        $cinemas = $this->getDoctrine()
            ->getRepository(Cinema::class)
            ->findAll();

        return $this->render('cinema/index.html.twig', [
            'cinemas' => $cinemas,
        ]);
    }
    /**
     * @Route("/front", name="cinema_front")
     */
    public function index2(Request $request,PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();
        // Get some repository of data, in our case we have an Concerts entity
        $CinemaRepository = $em->getRepository(Cinema::class);
        // Find all the data on the Concerts table, filter your query as you need
        $alCinemaQuery = $CinemaRepository->createQueryBuilder('cinemas')
            ->orWhere('cinemas.name Like :name ')
            ->setParameter('name', '%'.$data.'%')
            ->getQuery();
        // Paginate the results of the query
        $cinemas = $paginator->paginate(
        // Doctrine Query, not results
            $alCinemaQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3);
        return $this->render('cinema/indexfront.html.twig', [
            'cinemas' => $cinemas,
        ]);
    }




    /**
     * @Route("/new", name="cinema_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cinema = new Cinema();
        $form = $this->createForm(CinemaType::class, $cinema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $cinema->setImage("images/Cinema/".$req) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cinema);
            $entityManager->flush();

            return $this->redirectToRoute('cinema_index');
        }

        return $this->render('cinema/new.html.twig', [
            'cinema' => $cinema,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cinema_show", methods={"GET"})
     */
    public function show(Cinema $cinema): Response
    {
        return $this->render('cinema/show.html.twig', [
            'cinema' => $cinema,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cinema_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cinema $cinema): Response
    {
        $form = $this->createForm(CinemaType::class, $cinema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $req=$form->get('image')->getData();
            $cinema->setImage("images/Cinema/".$req) ;
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cinema_index');
        }

        return $this->render('cinema/edit.html.twig', [
            'cinema' => $cinema,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cinema_delete", methods={"POST"})
     */
    public function delete(Request $request, Cinema $cinema): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cinema->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cinema);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cinema_index');
    }
}
